<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $stats = [
            ['value' => '10', 'suffix' => 'M+', 'label' => 'Property Services Handled last Year'],
            ['value' => '16', 'suffix' => '+', 'label' => 'Municipal Corporations'],
            ['value' => '25', 'suffix' => '+', 'label' => 'Software Modules'],
            ['value' => '50', 'suffix' => '+', 'label' => 'Skilled Employees'],
        ];

        $certifications = [
            'ISO-270012022.webp',
            'ISO-20000-1-2018-Standards-Logo.webp',
            'iso-22301-2019-certification.webp',
            '9001-2015.webp',
        ];

        $products = [
            [
                'name' => 'Nagarkaryavali',
                'image' => 'Nagarkaryavali-home-page.webp',
                'points' => ['Property Tax', 'Tax Collection', 'Medicine Inventory'],
                'url' => route('products.nagarkaryavali'),
            ],
            [
                'name' => 'Banking Solutions',
                'image' => 'Property-Land-Estate-Management.webp',
                'points' => ['Billing Application', 'Location Mapping', 'Collection'],
                'url' => route('products.banking'),
            ],
        ];

        $services = [
            ['title' => 'Data Analytics', 'desc' => 'Empowering authorities to make informed decisions with precise data insights.', 'image' => 'Data-Analyst-2.webp'],
            ['title' => 'IT Infrastructure', 'desc' => 'Evolving the way of working by providing all IT solutions under one roof.', 'image' => 'AI-Solutions.webp'],
            ['title' => 'Technical Consultancy', 'desc' => 'Enabling the authorities to amplify their digital performance and services.', 'image' => 'Technical-Consultancy.webp'],
            ['title' => 'System Integration', 'desc' => 'Connecting different software, platforms and hardware for easy processes.', 'image' => 'System-Integration-2.webp'],
            ['title' => 'Web Development', 'desc' => 'Amplifying service provision and accessibility through web development.', 'image' => 'Web-Development-1.webp'],
            ['title' => 'Hardware Solutions', 'desc' => 'Bringing the physical solutions together with the digital for maximum uptime.', 'image' => 'Software-Development.webp'],
        ];

        $expertise = [
            ['title' => 'AI Solutions', 'desc' => 'Bringing intelligent automation together with real-time data for smarter decisions.', 'image' => 'AI-Solutions.webp'],
            ['title' => 'Software Development', 'desc' => 'Custom and advanced solutions for simple operations and business growth.', 'image' => 'Software-Development.webp'],
            ['title' => 'Technical Consultancy', 'desc' => 'Enabling the authorities to amplify their digital performance and services.', 'image' => 'Technical-Consultancy.webp'],
            ['title' => 'Web Development', 'desc' => 'Amplifying service provision and accessibility through web development.', 'image' => 'Web-Development-1.webp'],
            ['title' => 'Data Analysis', 'desc' => 'Supporting authorities to make informed decisions with precise data insights.', 'image' => 'Data-Analyst-2.webp'],
            ['title' => 'System Integration', 'desc' => 'Connecting different software, platforms and hardware for easy processes.', 'image' => 'System-Integration-2.webp'],
        ];

        $sectors = [
            ['title' => 'Municipal Corporations', 'image' => 'Municipal-Corporations.webp'],
            ['title' => 'Government Departments', 'image' => 'Government-Departments-1.webp'],
            ['title' => 'Utilities & Public Services', 'image' => 'Utilities-Public-Services-new.webp'],
            ['title' => 'Financial Systems', 'image' => 'Financial-Systems.webp'],
        ];

        $faqs = [
            ['q' => 'What is an ERP system?', 'a' => 'An ERP (Enterprise Resource Planning) system is software that helps businesses manage core operations like Accounting, Inventory, HR, Sales, Procurement and Customer Management from a single centralised platform.'],
            ['q' => 'What are the benefits of the ERP system?', 'a' => 'An ERP system improves efficiency by automating manual tasks, reducing errors, streamlining workflows and providing real-time business insights to support better decision-making.'],
            ['q' => 'Is the ERP system customisable for different industries?', 'a' => 'Yes, most ERP systems can be customised to fit the unique needs of industries such as Manufacturing, Retail, Healthcare, Logistics, Education and more.'],
            ['q' => 'Can the ERP system integrate with existing software?', 'a' => 'Yes, modern ERP systems are designed to integrate with third-party applications like CRM tools, Payment Gateways, E-commerce platforms, Payroll systems and other business software.'],
            ['q' => 'Is cloud-based ERP secure?', 'a' => 'Yes, cloud-based ERP solutions use advanced security measures such as Data Encryption, Regular Backups, Access Controls and Secure Servers to keep your business data safe and protected.'],
        ];

        $testimonials = [
    [
        'name' => 'विनोद मनोरे',
        'role' => 'भिवंडी निजामपूर शहर महानगरपालिका',
        'quote' => 'ASCENTech Information Technology Private Limited ही नेहमीच तत्परतेनी काम करणारी कंपनी असून आमच्या महानगरपालिकेमध्ये त्यांची "नगरकार्यावली" ही संगणक प्रणाली कार्यरत आहे. आम्ही "नगरकार्यावली" ही प्रणाली मालमत्ता करासाठी वापरात असून, ASCENTech ने आमच्या गरजेप्रमाणे सर्व बदल करून दिले आहेत. त्यांचा overall support खूप चांगला आहे.',
    ],
    [
        'name' => 'स्वरुप कुलकर्णी',
        'role' => 'मुख्य माहिती तंत्रज्ञान अधिकारी, ठाणे महानगरपालिका, ठाणे',
        'quote' => 'ASCENTech Information Technology Private Limited यांनी ठाणे महानगरपालिकेच्या गरजेनुसार विकसित केलेली संगणक प्रणाली "नगरकार्यावली" ही अद्ययावत असून महानगरपालिकेच्या कर व इतर फी संकलनाची कामे सहजरीत्या करण्यात येत आहेत.',
    ],
];

$clients = [
    'malegav municipal corporation.png',
    'mira bhayandar municipal corporation.png',
    'sangli giraj aani kupvad municipal.png',
    'thane municipal corporation.png',
    'uran ishwarpur municipal.png',
    'vasai virar municipal corporation.png',
    'wadi municipal council.png',
    'dhule municipal corporation.png',
    'ichalkaranji mahanagarpalika.png',
    'kolhapur municipal corporation.png',
    'jalgaon municipal corporation.png',
    'latur municipal corporation.png',
    'amravati municipal corporation.png',
    'nashik municipal corporation.png',
    'ulhasnagar municipal corporation.png',
    'parbhani municipal corporation.png',
];
return view('home', compact('stats', 'certifications', 'products', 'services', 'expertise', 'sectors', 'testimonials', 'clients', 'faqs'));    }
}