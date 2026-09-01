
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CareerController;


/*
|--------------------------------------------------------------------------
| Test Route
|--------------------------------------------------------------------------
*/

Route::get('/test-render', function () {
    return 'RENDER LARAVEL IS WORKING';
});


/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/nagarkaryavali', [PageController::class, 'nagarkaryavali'])
    ->name('products.nagarkaryavali');

Route::get('/banking-solutions', [PageController::class, 'banking'])
    ->name('products.banking');

Route::get('/events', [PageController::class, 'events'])
    ->name('events');

Route::get('/awards', [PageController::class, 'awards'])
    ->name('awards');

Route::get('/news-media', [PageController::class, 'news'])
    ->name('news');

Route::get('/careers', [PageController::class, 'careers'])
    ->name('careers');

Route::get('/contact-us', [PageController::class, 'contact'])
    ->name('contact');


/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/

Route::post('/contact-us', [PageController::class, 'contactSubmit'])
    ->name('contact.submit');


/*
|--------------------------------------------------------------------------
| Career Form
|--------------------------------------------------------------------------
*/

Route::post('/career/submit', [CareerController::class, 'submit'])
    ->name('career.submit');


/*
|--------------------------------------------------------------------------
| Career CV Download
|--------------------------------------------------------------------------
*/

Route::get('/careers/cv/{filename}', function ($filename) {

    $path = 'career-cvs/' . $filename;

    if (!Storage::disk('public')->exists($path)) {
        abort(404, 'CV not found.');
    }

    $fullPath = Storage::disk('public')->path($path);

    return response()->download(
        $fullPath,
        $filename,
        [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]
    );

})->where('filename', '.*')->name('career.cv');


/*
|--------------------------------------------------------------------------
| Schedule Call Form
|--------------------------------------------------------------------------
*/

Route::post('/schedule-submit', [PageController::class, 'scheduleSubmit'])
    ->name('schedule.submit');

