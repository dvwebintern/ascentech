<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
{
    $techStrengths = [
        ['title' => 'Platforms', 'desc' => 'SaaS, Cloud-Based and Turnkey Solutions.'],
        ['title' => 'Capabilities', 'desc' => 'Real-Time Secure Systems, Third-Party Data Migration and System Integration.'],
        ['title' => 'Architecture', 'desc' => 'Scalable, Flexible and Robust Technology Frameworks.'],
    ];

    $leaders = [
        ['name' => 'Mr. Ashutosh Samant', 'role' => 'CEO and Managing Director', 'bio' => 'Mr. Ashutosh Samant is a veteran technology strategist having more than 25 years of expertise in software development and E-Governance software solutions. As CEO and Managing Director, he leads ASCENTech\'s product vision, including the flagship Nagarkaryavali platform, widely adopted by major Municipal Corporations in Maharashtra.', 'image' => 'leadership/ashutosh-samant.jpg'],
        ['name' => 'Mr. Waman Breed', 'role' => 'COO and Director', 'bio' => 'Mr. Waman Breed has over 20 years of experience in operations and administration and has significantly contributed to the growth of ASCENTech. He also has expertise in handling finance and operations.', 'image' => 'leadership/waman-breed.jpg'],
    ];

    $managementTeam = [
        ['name' => 'Mr. Sachin Kakirde', 'role' => 'Chief Product Officer', 'image' => 'leadership/sachin-kakirde.jpg'],
        ['name' => 'Mr. Madhusudhan Phadke', 'role' => 'Chief Revenue Officer', 'image' => 'leadership/madhusudhan-phadke.jpg'],
        ['name' => 'Mr. Ashish Potdar', 'role' => 'Head - Projects', 'image' => 'leadership/ashish-potdar.jpg'],
        ['name' => 'Mr. Sandip Bhandarkar', 'role' => 'Sr. Project Manager', 'image' => 'leadership/sandip-bhandarkar.jpg'],
        ['name' => 'Mr. Pratik Shaha', 'role' => 'Project Manager', 'image' => 'leadership/pratik-shaha.jpg'],
    ];

    $certifications = [
        'ISO-270012022.webp',
        'ISO-20000-1-2018-Standards-Logo.webp',
        'iso-22301-2019-certification.webp',
        '9001-2015.webp',
    ];

    $associations = ['nasscom.png', 'sme-chamber.png', 'dpiit.png'];
    $empanelments = ['upyog.png', 'bank-of-maharashtra.png', 'bank-of-baroda.png', 'hdfc-bank.png', 'axis-bank.png'];

    $stats = [
        ['value' => '3', 'suffix' => 'M+', 'label' => 'Property Services Handled Last Year'],
        ['value' => '16', 'suffix' => '+', 'label' => 'Municipal Corporations'],
        ['value' => '30', 'suffix' => '+', 'label' => 'Software Modules'],
        ['value' => '175', 'suffix' => '+', 'label' => 'Skilled Employees'],
    ];

    return view('pages.about', compact('techStrengths', 'leaders', 'managementTeam', 'certifications', 'associations', 'empanelments', 'stats'));
}
    public function services(): View { return view('pages.services'); }
    public function nagarkaryavali(): View { return view('pages.nagarkaryavali'); }
    public function banking(): View { return view('pages.banking'); }
    public function events()
{
    $events = [

        /*
        |--------------------------------------------------------------------------
        | 2026
        | Year → Festival/Event → Images
        |--------------------------------------------------------------------------
        */

        '2026' => [

            [
                'title' => '9th Foundation Day',
                'images' => [
                    'events/2026/29.jpg',
                    'events/2026/30.jpg',
                    'events/2026/31.jpg',
                    'events/2026/32.jpg',
                    'events/2026/33.jpg',
                ],
            ],

            [
                'title' => 'Annual Meet',
                'images' => [
                     'events/2026/355.jpg',
                    'events/2026/356.jpg',
                    'events/2026/357.jpg',
                    'events/2026/358.jpg',
                      'events/2026/359.jpg',
                        'events/2026/360.jpg',
                ],
            ],

            [
                'title' => 'Shivjayanti',
                'images' => [
                    'events/2026/362.jpg',
                    'events/2026/363.jpg',
                    'events/2026/364.jpg',
                    'events/2026/365.jpg',
                ],
            ],

        ],


        /*
        |-------------------------------------------------------------------------
        | 2025
        |--------------------------------------------------------------------------
        */

        '2025' => [

            [
                'title' => '9th Foundation Day',
                'images' => [
                    'events/2025/368.jpg',
                    'events/2025/369.jpg',
                    'events/2025/370.jpg',
                    'events/2025/371.jpg',
                ],
            ],

            [
                'title' => 'AGM 2025',
                'images' => [
                    'events/2025/373.jpg',
                    'events/2025/374.jpg',
                    'events/2025/375.jpg',
                    'events/2025/376.jpg',
                    'events/2025/377.jpg',
                    'events/2025/378.jpg',
                ],
            ],

            [
                'title' => 'Diwali',
                'images' => [
                    'events/2025/380.jpg',
                    'events/2025/381.jpg',
                    'events/2025/382.jpg',
                    'events/2025/383.jpg',
                    'events/2025/384.jpg',
                ],
            ],

            [
                'title' => 'Ganesh Festival',
                'images' => [
                    'events/2025/386.jpg',
                    'events/2025/387.jpg',
                    'events/2025/388.jpg',
                    'events/2025/389.jpg',
                    'events/2025/390.jpg',
                ],
            ],

             [
                'title' => 'Shivjayanti',
                'images' => [
                    'events/2025/392.jpg',
                    'events/2025/393.jpg',
                    'events/2025/394.jpg',
                    'events/2025/395.jpg',
                    'events/2025/396.jpg',
                ],
            ],
            [
                'title' => "Women's Day",
                'images' => [
                    'events/2025/398.jpg',
                    'events/2025/399.jpg',
                    'events/2025/400.jpg',
                    'events/2025/401.jpg',
                ],
            ],

        ],


        /*
        |--------------------------------------------------------------------------
        | 2024
        |--------------------------------------------------------------------------
        */

        '2024' => [

             [
                'title' => '8th Foundation Day',
                'images' => [
                    'events/2024/404.jpg',
                    'events/2024/405.jpg',
                    'events/2024/406.jpg',
                    'events/2024/407.jpg',
                    'events/2024/408.jpg',
                ],
            ],

            [
                'title' => 'AGM 2024',
                'images' => [
                    'events/2024/410.jpg',
                    'events/2024/411.jpg',
                    'events/2024/412.jpg',
                    'events/2024/413.jpg',
                    'events/2024/414.jpg',
                ],
            ],

            [
                'title' => 'Diwali',
                'images' => [
                    'events/2024/416.jpg',
                    'events/2024/417.jpg',
                    'events/2024/418.jpg',
                    'events/2024/419.jpg',
                    'events/2024/420.jpg',
                ],
            ],
 [
                'title' => 'Christmas',
                'images' => [
                   'events/2024/422.jpg',
                    'events/2024/423.jpg',
                    'events/2024/424.jpg',
                    'events/2024/425.jpg',
                    'events/2024/426.jpg',
                ],
            ],
 [
                'title' => 'Shivjayanti',
                'images' => [
                    'events/2024/434.jpg',
                    'events/2024/435.jpg',
                    'events/2024/436.jpg',
                    'events/2024/437.jpg',
                    'events/2024/438.jpg',
                ],
            ],

            [
                'title' => 'Ganesh Festival',
                'images' => [
                    'events/2024/428.jpg',
                    'events/2024/429.jpg',
                    'events/2024/430.jpg',
                    'events/2024/431.jpg',
                    'events/2024/432.jpg',
                ],
            ],
 [
                'title' => 'Sports Day',
                'images' => [
                   'events/2024/440.jpg',
                    'events/2024/441.jpg',
                    'events/2024/442.jpg',
                    'events/2024/443.jpg',
                    'events/2024/444.jpg',
                    'events/2024/445.jpg',
                    'events/2024/446.jpg',
                    'events/2024/447.jpg',
                ],
            ],
            [
                'title' => "Women's Day",
                'images' => [
                    'events/2024/449.jpg',
                    'events/2024/450.jpg',
                    'events/2024/451.jpg',
                    'events/2024/452.jpg',
                ],
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | 2023
        |--------------------------------------------------------------------------
        */

        '2023' => [

            [
                'title' => '7th Foundation Day',
                'images' => [
                    'events/2023/455.jpg',
                    'events/2023/456.jpg',
                    'events/2023/457.jpg',
                    'events/2023/458.jpg',
                    'events/2023/459.jpg',
                ],
            ],

            [
                'title' => 'AGM 2023',
                'images' => [
                   'events/2023/461.jpg',
                    'events/2023/487/462.jpg',
                    'events/2023/463.jpg',
                    'events/2023/464.jpg',
                    'events/2023/465.jpg',
                ],
            ],

             [
                'title' => 'Christmas',
                'images' => [
                    'events/2023/467.jpg',
                    'events/2023/468.jpg',
                    'events/2023/469.jpg',
                    'events/2023/470.jpg',
                    'events/2023/471.jpg',
                ],
            ],

            [
                'title' => 'Diwali',
                'images' => [
                    'events/2023/473.jpg',
                    'events/2023/474.jpg',
                    'events/2023/475.jpg',
                    'events/2023/476.jpg',
                    'events/2023/477.jpg',
                ],
            ],

            [
                'title' => 'Ganesh Festival',
                'images' => [
                    'events/2023/479.jpg',
                    'events/2023/480.jpg',
                    'events/2023/481.jpg',
                    'events/2023/482.jpg',
                    'events/2023/483.jpg',
                ],
            ],

            [
                'title' => "Women's Day",
                'images' => [
                    'events/2023/485.jpg',
                    'events/2023/486.jpg',
                    'events/2023/487(1).jpg',
                    'events/2023/488(1).jpg',
                ],
            ],

        ],


        /*
        |--------------------------------------------------------------------------
        | 2022
        |--------------------------------------------------------------------------
        */

        '2022' => [
           
            [
                'title' => 'Annual Day',
                'images' => [
                    'events/2022/487.jpg',
                    'events/2022/488.jpg',
                    'events/2022/489.jpg',
                    'events/2022/490.jpg',
                    'events/2022/491.jpg',
                ],
            ],

            [
                'title' => 'Diwali Celebration',
                'images' => [
                   'events/2022/493.jpg',
                    'events/2022/494.jpg',
                    'events/2022/495.jpg',
                    'events/2022/496.jpg',
                    'events/2022/497.jpg',
                ],
            ],

        ],


        /*
        |--------------------------------------------------------------------------
        | 2021
        |--------------------------------------------------------------------------
        */

        '2021' => [
            'images' => [
                'events/2021/2021.jpg',
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | 2019
        |--------------------------------------------------------------------------
        */

        '2019' => [
            'images' => [
                'events/2019/20.jpg',
                'events/2019/21.jpg',
                'events/2019/22.jpg',
                'events/2019/23.jpg',
                'events/2019/24.jpg',
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | 2018
        |--------------------------------------------------------------------------
        */

        '2018' => [
            'images' => [
                'events/2018/14.jpg',
                'events/2018/15.jpg',
                'events/2018/16.jpg',
                'events/2018/17.jpg',
                'events/2018/18.jpg',
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | 2017
        |--------------------------------------------------------------------------
        */

        '2017' => [
            'images' => [
                 'events/2017/8.jpg',
                'events/2017/9.jpg',
                'events/2017/10.jpg',
                'events/2017/11.jpg',
                'events/2017/12.jpg',
            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | 2016
        |--------------------------------------------------------------------------
        */

        '2016' => [
            'images' => [
                'events/2016/2.jpg',
                'events/2016/3.jpg',
                'events/2016/4.jpg',
                'events/2016/5.jpg',
                'events/2016/6.jpg',
            ],
        ],

    ];

    return view('pages.events', compact('events'));
}

    public function awards()
{
    $awards = [
        [
            'image' => 'skoch award.jpg',
            'title' => 'Skotch Award',
        ],
        [
            'image' => 'fortune leadership certificate.jpg',
            'title' => 'Fortune Leadership Certificate',
        ],
        [
            'image' => 'fortune leadership trophy.jpg',
            'title' => 'Fortune Leadership Trophy',
        ],
        [
            'image' => 'business leader certificate.jpg',
            'title' => 'Business Leader Certificate',
        ],
        [
            'image' => 'business leader trophy.jpg',
            'title' => 'Business Leader Trophy',
        ],
        [
            'image' => 'star of industry trophy.jpg',
            'title' => 'Star of Industry Trophy',
        ],
    ];

    $certificates = [
        [
            'image' => 'Star of Industry.jpg',
            'title' => 'Star of Industry',
        ],
        [
            'image' => 'ISO 27001-2022.jpg',
            'title' => 'ISO 27001-2022',
        ],
        [
            'image' => 'ISO 23201-2019.jpg',
            'title' => 'ISO 23201-2019',
        ],
        [
            'image' => 'ISO 20000-2018.jpg',
            'title' => 'ISO 20000-2018',
        ],
        [
            'image' => 'ISO 9001-2015.jpg',
            'title' => 'ISO 9001-2015',
        ],
        [
            'image' => 'Certificate for Eligible Business.jpg',
            'title' => 'Certificate for Eligible Business',
        ],
    ];

    return view('pages.awards', compact('awards', 'certificates'));
}
    public function news(): View { return view('pages.news'); }
    public function careers(): View { return view('pages.careers'); }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email',
            'requirements' => 'nullable|string',
        ]);

        return back()->with('success', 'Thank you! We will get back to you shortly.');
    }
}


