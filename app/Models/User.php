<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'username', //
        'display_name',
        'email', //
        'phone', //
        "password",
        'profile_photo_path', // storage photo path
        'profile_photo_url', //profile faker photo
        'status', //0-> nothing, 1 -> active, 3 -> temporary banned, 4->banned on data, 2 -> draft
        "remember_token", // 
        "remember_me",
        'email_verified_at', //
        'temp_access_token',

    ];

    /**
     * User has many courses, if user create a course
     */
    public function courses()
    {
        return $this->hasMany(Course::class, "instructor", "id");
    }

    public function getWithRelationsAttribute()
    {
        $this->load('courses.courseModules.contents',);
        return $this;
    }

    // here creatd_at  is a custom attribute that returns the created at date in human readable format.
    // but, my database  column name for this field is "created_at" not "createdAtt". so i used accessor
    /**
     * ACCESSOR
     * Get the value of `created_at` as a Carbon instance.
     */
    public function getCreatedAtAttribute($date): string
    {
        return Carbon::parse($date)->format("M d, Y");
    }
    public function getUpdatedAtAttribute($date): string
    {
        return Carbon::parse($date)->format("M d, Y");
        // Carbon::
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
