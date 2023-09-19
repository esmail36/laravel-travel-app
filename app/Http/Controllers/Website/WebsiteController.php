<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function index() {
        return view('website.index');
    }

    function about() {
        return view('website.about');
    }

    function deals() {
        return view('website.deals');
    }

    function login() {
        return view('website.login');
    }

    function register() {
        return view('website.register');
    }
}
