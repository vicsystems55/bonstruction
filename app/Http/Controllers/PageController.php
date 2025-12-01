<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $description = 'Welcome to Bonstruction - Your trusted construction partner';
        return view('pages.index', compact('title', 'description'));
    }

    public function about()
    {
        $title = 'About Us';
        $description = 'Learn more about Bonstruction and our mission';
        return view('pages.about', compact('title', 'description'));
    }

    public function services()
    {
        $title = 'Our Services';
        $description = 'Explore the construction services we offer';
        return view('pages.servcies', compact('title', 'description'));
    }

    public function contact()
    {
        $title = 'Contact Us';
        $description = 'Get in touch with our team';
        return view('pages.contact', compact('title', 'description'));
    }

    public function privacyPolicy()
    {
        $title = 'Privacy Policy';
        $description = 'Read our privacy policy';
        return view('pages.privacy-policy', compact('title', 'description'));
    }

    public function terms()
    {
        $title = 'Terms & Conditions';
        $description = 'Read our terms and conditions';
        return view('pages.terms', compact('title', 'description'));
    }

    public function projects()
    {
        $title = 'Our Projects';
        $description = 'Discover our completed and ongoing projects';
        return view('pages.projects', compact('title', 'description'));
    }

    public function blog()
    {
        $title = 'Blog';
        $description = 'Read our latest articles and updates from Bonstruction';
        return view('pages.blog', compact('title', 'description'));
    }

    public function csr()
    {
        $title = 'Corporate Social Responsibility';
        $description = 'Learn about our CSR initiatives and community involvement';
        return view('pages.csr', compact('title', 'description'));
    }

    public function careers()
    {
        $title = 'Careers at Bonstruction';
        $description = 'Explore career opportunities with us';
        return view('pages.careers', compact('title', 'description'));
    }

    public function sectors()
    {
        $title = 'Sectors We Serve';
        $description = 'Discover the various sectors we specialize in';
        return view('pages.sectors', compact('title', 'description'));
    }
}
