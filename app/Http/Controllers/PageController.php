<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function projects() {
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio built with Laravel.'
            ],
            [
                'title' => 'Blog System',
                'description' => 'A simple blog application.'
            ],
            [
                'title' => 'Business Landing Page',
                'description' => 'A landing page for a business.'
            ]
        ];
        return view('pages.projects', ['projects' => $projects]);
    }

    public function contact() {
        return view('pages.contact');
    }
}
