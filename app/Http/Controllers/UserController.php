<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editProfile()
    {
        $user = auth()->user();
        return view('auth.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        // Update name and email
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        // Upload avatar
        if ($request->hasFile('avatar')) {
            $user->deleteAvatar();
            $user->uploadAvatar($request->file('avatar'));
        }

        // Upload cover photo
        if ($request->hasFile('cover')) {
            $user->deleteCover();
            $user->uploadCover($request->file('cover'));
        }

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function
    referral()
    {
        // return $this->belongsToMany(User::class, 'referral', 'referral_id', 'user_id');
        return view('referral');
    }
}
