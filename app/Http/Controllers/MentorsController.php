<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MentorsController extends Controller
{
    public function index()
    {
        $mentors = User::where('role', 'mentor')->get();

        return view('mentors.index', compact('mentors'));
    }
}
