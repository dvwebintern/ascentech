<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'cv'    => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload CV
        |--------------------------------------------------------------------------
        */

        $cvFile = $request->file('cv');

        // Get original filename without extension
        $originalName = pathinfo(
            $cvFile->getClientOriginalName(),
            PATHINFO_FILENAME
        );

        // Clean original filename
        $originalName = preg_replace(
            '/[^A-Za-z0-9_-]/',
            '_',
            $originalName
        );

        // File extension
        $extension = strtolower(
            $cvFile->getClientOriginalExtension()
        );

        // Clean applicant name
        $applicantName = preg_replace(
            '/[^A-Za-z0-9_-]/',
            '_',
            $request->name
        );

        // Create unique readable filename
        $cvName = $applicantName
            . '_'
            . $originalName
            . '_'
            . time()
            . '.'
            . $extension;

        // Store CV
        $cvPath = $cvFile->storeAs(
            'career-cvs',
            $cvName,
            'public'
        );

        /*
        |--------------------------------------------------------------------------
        | Create CV URL
        |--------------------------------------------------------------------------
        */
$cvUrl = route('career.cv', [
    'filename' => basename($cvPath)
]);

        /*
        |--------------------------------------------------------------------------
        | Google Sheet
        |--------------------------------------------------------------------------
        */

        $googleSheetUrl = 'https://script.google.com/macros/s/AKfycbzA-qr1ZtduS2rdCCrWVgO6J9tM7A49R1HxUYWelMIS4354VRDxQ8B7XCQRa3rXqFHz/exec';

      $data = [
    'form_type' => 'career',
    'name'      => $request->name,
    'email'     => $request->email,
    'phone'     => $request->phone,
    'cv_name'   => $cvName,
    'cv_url'    => $cvUrl,
];
        /*
        |--------------------------------------------------------------------------
        | Send Data To Google Sheet
        |--------------------------------------------------------------------------
        */

        $ch = curl_init($googleSheetUrl);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            json_encode($data)
        );

        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Content-Type: application/json'
            ]
        );

        curl_setopt(
            $ch,
            CURLOPT_RETURNTRANSFER,
            true
        );

        $googleResponse = curl_exec($ch);

        $curlError = curl_error($ch);

        curl_close($ch);

        /*
        |--------------------------------------------------------------------------
        | Return Success
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'success' => true,
            'message' => 'Application submitted successfully!',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv_name' => $cvName,
            'cv_path' => $cvPath,
            'cv_url' => $cvUrl,
            'google_sheet_sent' => !empty($googleResponse),
            'google_error' => $curlError ?: null,
        ]);
    }
}