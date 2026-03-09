<?php

namespace App\Http\Controllers;

use App\Models\Home; // We are using 'Home' because that is your model name
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Use Home model to get data from the profiles table
        $profile = Home::first(); 
        return view('pages.home', compact('profile'));
    }

    public function contact() {
        $profile = Home::first();
        return view('pages.contact', compact('profile'));
    }
}