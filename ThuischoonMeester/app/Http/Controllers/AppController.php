<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\Images;
use App\Models\about;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $categories = categories::all();
        $about = about::all();
        $Image = Images::all();

        return view('app', compact('categories', 'Image' , "about"));
    }
}
