<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'occupation', 'skills', 'languages', 'bio', 'hourly_rate',
        'avatar', 'cover',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function uploadAvatar($avatar)
    {
        $filename = time() . '.' . $avatar->getClientOriginalExtension();

        if (!file_exists(public_path('storage'))) {
            mkdir(public_path('storage'), 0777, true);
        }

        $avatar->move(public_path('storage'), $filename);

        $this->avatar = $filename;
        $this->save();
    }

    public function uploadCover($cover)
    {
        $filename = time() . '.' . $cover->getClientOriginalExtension();

        if (!file_exists(public_path('storage'))) {
            mkdir(public_path('storage'), 0777, true);
        }

        $cover->move(public_path('storage'), $filename);

        $this->cover = $filename;
        $this->save();
    }

    public function deleteAvatar()
    {
        if ($this->avatar !== 'default.png') {
            $file = public_path('storage/' . $this->avatar);
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }

    public function deleteCover()
    {
        if ($this->cover !== 'default-cover.jpg') {
            $file = public_path('storage/' . $this->cover);
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }

    public function mentors()
    {
        return $this->belongsToMany(User::class, 'mentor_student', 'student_id', 'mentor_id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'mentor_student', 'mentor_id', 'student_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }




    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
