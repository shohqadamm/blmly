<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $mentors = User::where('role', 'mentor')->get();
        return view('welcome', compact('mentors'));
    }
}
