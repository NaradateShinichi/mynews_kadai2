<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//PHP/Laravel 18 課題↓
use App\Profile;
//PHP/Laravel 18 課題↑

class ProfileController extends Controller
{
    //PHP/Laravel 18 課題↓
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
    //PHP/Laravel 18 課題↑
}
