<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $application = new Application();

        $application->mentor_id = $request->input('mentor_id');
        $application->student_id = auth()->user()->id;
        $application->reason = $request->input('reason');
        $application->status = 'pending';

        $application->save();

        return redirect('/home')->with('success', 'Your application has been submitted!');
    }
}
