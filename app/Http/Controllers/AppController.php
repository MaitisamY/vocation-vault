<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public $categories;
    public $listings;
    public $appFooter;

    public function __construct() {
        $this->appFooter = 'Copyright © ' . date('Y') . ' Vocation Vault, All rights reserved.';

        $this->categories = [
            [ 'id' => 1, 'name' => 'Finance', 'slug'         => 'finance', 'image'           => 'finance.png'],
            [ 'id' => 2, 'name' => 'Sales', 'slug'           => 'sales', 'image'             => 'sales.png'],
            [ 'id' => 3, 'name' => 'Marketing', 'slug'       => 'marketing', 'image'         => 'marketing.png'],
            [ 'id' => 4, 'name' => 'Human Resources', 'slug' => 'human-resources', 'image'   => 'hr.png'],
            [ 'id' => 5, 'name' => 'IT & Networking', 'slug' => 'it-and-networking', 'image' => 'it.png'],
            [ 'id' => 6, 'name' => 'Engineering', 'slug'     => 'engineering', 'image'       => 'engineering.png'],
            [ 'id' => 7, 'name' => 'Hotels & Tourism', 'slug'=> 'hotels-and-tourism', 'image'=> 'hotels.png'],
            [ 'id' => 8, 'name' => 'Education', 'slug'       => 'education', 'image'         => 'education.png']
        ];

        $this->listings = [
            [
                'id'          => 1,
                'title'       => 'Web Developer With 3+ Years of Experience is Needed.',
                'description' => 'VolarSoft immediately needs and expert web developer with over 3 years of experience. We are seeking an experienced web developer to join the team.',
                'category'    => 'IT & Networking',
                'user'        => 'VolarSoft',
                'email'       => 'volarsoft@example.com',
                'location'    => 'USA',
                'type'        => ['Full Time', 'Part Time']
            ],
            [
                'id'          => 2,
                'title'       => 'Marketing Manager Required',
                'description' => 'Vanza Solutions needs a marketing manager to help drive sales. We are seeking an experienced marketing manager to join the team.',
                'category'    => 'Marketing',
                'user'        => 'Vanza Solutions',
                'email'       => 'vanzasolutions@example.com',
                'location'    => 'UK',
                'type'        => ['Hybrid','Remote']
            ],
            [
                'id'          => 3,
                'title'       => 'Sales Representative Required',
                'description' => 'Urban Tech needs a sales representative to help drive sales. We are seeking an experienced sales representative to join the team.',
                'category'    => 'Sales',
                'user'        => 'Urban Tech',
                'email'       => 'urban.tech@example.com',
                'location'    => 'Malaysia',
                'type'        => ['Remote']
            ]
        ];
    }

    public function home() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | Home',
            'pageDescription' => 'Home page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault home'
        ];

        $categories = $this->categories;
        $listings   = $this->listings;
        $footer     = $this->appFooter;

        return view('home', compact('metaData', 'categories', 'listings', 'footer'));
    }

    public function about() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | About',
            'pageDescription' => 'About page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault about'
        ];

        $categories = $this->categories;
        $footer     = $this->appFooter;

        return view('about', compact('metaData', 'categories', 'footer'));
    }

    public function contact() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | Contact',
            'pageDescription' => 'Contact page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault contact'
        ];

        $categories = $this->categories;
        $footer     = $this->appFooter;

        return view('contact', compact('metaData', 'categories', 'footer'));
    }

    public function categories() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | Categories',
            'pageDescription' => 'Contact page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault categories'
        ];

        $categories = $this->categories;
        $footer     = $this->appFooter;

        return view('categories', compact('metaData', 'categories', 'footer'));
    }

    public function listings() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | Listings',
            'pageDescription' => 'Listings page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault listings'
        ];

        $categories = $this->categories;
        $footer     = $this->appFooter;

        return view('listings', compact('metaData', 'categories', 'footer'));
    }

    public function privacy_policy() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | Privacy Policy',
            'pageDescription' => 'Privacy Policy page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault privacy policy'
        ];

        $current_date   = Carbon::now();
        $formatted_date = $current_date->format('jS M l Y');

        $policies = [
            'title'                         => 'Privacy Policy',
            'email'                         => 'contact@email.com',
            'description'                   => [
                'Introduction'              => 'This Privacy Policy outlines how Vocation Vault collects, uses, and protects your
                                                personal information when you use our services. By accessing or using
                                                Vocation Vault, you consent to the collection, use, and disclosure
                                                of your personal information in accordance with this policy.',
                'Information We Collect'    => 'We may collect personal information from you when you register an account,
                                                submit job applications, or otherwise interact with our platform.
                                                This information may include your name, email address,
                                                contact information, resume, and other relevant details.',
                'Use of Information'        => [
                    'We may use the information we collect for various purposes, including but not limited to:',
                    'Providing and improving our services',
                    'Personalizing your experience',
                    'Communicating with you',
                    'Analyzing usage trends',
                    'Enforcing our Terms and Conditions'
                ],
                'Disclosure of Information' => 'We may share your personal information with third parties as necessary to provide
                                                our services, comply with legal obligations, or protect our rights.
                                                We may also share aggregated or anonymized data for analytical or
                                                statistical purposes.',
                'Data Security'             => 'We implement security measures to protect your personal information from unauthorized
                                                access, alteration, disclosure, or destruction. However, please note that no method
                                                of transmission over the internet or electronic storage is 100% secure, and we
                                                cannot guarantee absolute security.',
                'Cookies'                   => 'Vocation Vault may use cookies and similar technologies to enhance your experience
                                                and gather information about usage patterns. You can choose to accept or decline
                                                cookies through your browser settings, but this may affect the functionality of
                                                our platform.',
                'Third-Party Links'         => 'Our platform may contain links to third-party websites or services. We are not
                                                responsible for the privacy practices or content of these third parties.
                                                We encourage you to review the privacy policies of any third-party sites you visit.',
                "Privacy for Children"      => "Vocation Vault is not intended for use by individuals under the age of 18.
                                                We do not knowingly collect personal information from children.
                                                If you believe that we have inadvertently collected information from a child,
                                                please contact us immediately.",
                'Changes to Privacy Policy' => 'We reserve the right to update or modify this Privacy Policy at any time.
                                                Any changes will be effective immediately upon posting on our platform.
                                                Your continued use of Vocation Vault after the posting of changes
                                                constitutes your acceptance of such changes.',
            ],
            'last_updated'                  => 'Last updated: ' . $formatted_date,
            'ending_note'                   => 'By using Vocation Vault, you acknowledge that you have read, understood,
                                                and agree to be bound by this Privacy Policy.'
        ];

        $categories = $this->categories;
        $footer     = $this->appFooter;

        return view('privacy-policy', compact('metaData', 'categories', 'policies', 'footer'));
    }

    public function terms_and_conditions() {

        $metaData = [
            'appAuthor'       => 'Aitisam Yaseen',
            'pageTitle'       => 'Vocation Vault | Privacy Policy',
            'pageDescription' => 'Privacy Policy page of Vocation Vault project.',
            'pageKeywords'    => 'jobs, listings, vocation vault, vocation vault privacy policy'
        ];

        $current_date   = Carbon::now();
        $formatted_date = $current_date->format('jS M l Y');

        //To be continued
    }
}
