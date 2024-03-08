<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public $categories;
    public $listings;
    public $appFooter;

    public function __construct() {
        $this->appFooter = 'Copyright © ' . date('Y') . ' Vocation Vault, All rights reserved.';

        $this->categories = [
            [ 'id' => 1, 'name' => 'Finance', 'slug' => 'finance', 'image' => 'finance.png'],
            [ 'id' => 2, 'name' => 'Sales', 'slug' => 'sales', 'image'=> 'sales.png'],
            [ 'id' => 3, 'name' => 'Marketing', 'slug' => 'marketing', 'image'=> 'marketing.png'],
            [ 'id' => 4, 'name' => 'Human Resources', 'slug' => 'human-resources', 'image'=> 'hr.png'],
            [ 'id'=> 5, 'name'=> 'IT & Networking', 'slug'=> 'it-and-networking', 'image'=> 'it.png'],
            [ 'id'=> 6, 'name'=> 'Engineering', 'slug'=> 'engineering', 'image'=> 'engineering.png'],
            [ 'id'=> 7, 'name'=> 'Hotels & Tourism', 'slug'=> 'hotels-and-tourism', 'image'=> 'hotels.png'],
            [ 'id'=> 8, 'name'=> 'Education', 'slug'=> 'education', 'image'=> 'education.png']
        ];

        $this->listings = [
            [
                'id'=> 1,
                'title'=> 'Web Developer With 3+ Years of Experience is Needed.',
                'description'=> 'VolarSoft immediately needs and expert web developer with over 3 years of experience. We are seeking an experienced web developer to join the team.',
                'category' => 'IT & Networking',
                'user'=> 'VolarSoft',
                'email'=> 'volarsoft@example.com',
                'location'=> 'USA',
                'type'=> ['Full Time', 'Part Time']
            ],
            [
                'id'=> 2,
                'title'=> 'Marketing Manager Required',
                'description'=> 'Vanza Solutions needs a marketing manager to help drive sales. We are seeking an experienced marketing manager to join the team.',
                'category' => 'Marketing',
                'user'=> 'Vanza Solutions',
                'email'=> 'vanzasolutions@example.com',
                'location'=> 'UK',
                'type'=> ['Hybrid','Remote']
            ],
            [
                'id'=> 3,
                'title'=> 'Sales Representative Required',
                'description' => 'Urban Tech needs a sales representative to help drive sales. We are seeking an experienced sales representative to join the team.',
                'category' => 'Sales',
                'user'=> 'Urban Tech',
                'email'=> 'urban.tech@example.com',
                'location'=> 'Malaysia',
                'type'=> ['Remote']
            ]
        ];
    }

    public function home() {

        $metaData = [
            'appAuthor' => 'Aitisam Yaseen',
            'pageTitle' => 'Vocation Vault | Home',
            'pageDescription' => 'Home page of Vocation Vault project.',
            'pageKeywords' => 'jobs, listings, vocation vault, vocation vault home'
        ];

        $categories = $this->categories;
        $listings = $this->listings;
        $footer = $this->appFooter;

        return view('home', compact('metaData', 'categories', 'listings', 'footer'));
    }

    public function about() {

        $metaData = [
            'appAuthor' => 'Aitisam Yaseen',
            'pageTitle' => 'Vocation Vault | About',
            'pageDescription' => 'About page of Vocation Vault project.',
            'pageKeywords' => 'jobs, listings, vocation vault, vocation vault about'
        ];

        $categories = $this->categories;
        $footer = $this->appFooter;

        return view('about', compact('metaData', 'categories', 'footer'));
    }

    public function contact() {

        $metaData = [
            'appAuthor' => 'Aitisam Yaseen',
            'pageTitle' => 'Vocation Vault | Contact',
            'pageDescription' => 'Contact page of Vocation Vault project.',
            'pageKeywords' => 'jobs, listings, vocation vault, vocation vault contact'
        ];

        $categories = $this->categories;
        $footer = $this->appFooter;

        return view('contact', compact('metaData', 'categories', 'footer'));
    }

    public function categories() {

        $metaData = [
            'appAuthor' => 'Aitisam Yaseen',
            'pageTitle' => 'Vocation Vault | Categories',
            'pageDescription' => 'Contact page of Vocation Vault project.',
            'pageKeywords' => 'jobs, listings, vocation vault, vocation vault categories'
        ];

        $categories = $this->categories;
        $footer = $this->appFooter;

        return view('categories', compact('metaData', 'categories', 'footer'));
    }

    public function listings() {

        $metaData = [
            'appAuthor' => 'Aitisam Yaseen',
            'pageTitle' => 'Vocation Vault | Listings',
            'pageDescription' => 'Listings page of Vocation Vault project.',
            'pageKeywords' => 'jobs, listings, vocation vault, vocation vault listings'
        ];

        $categories = $this->categories;
        $footer = $this->appFooter;

        return view('listings', compact('metaData', 'categories', 'footer'));
    }
}
