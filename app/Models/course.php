<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course_module as courseModules;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;


class course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =
    [
        "id",
        "name",
        "thumb",
        "has_batch",
        "category",
        "description",
        "feature",
        "target",
        "outcome",
        "instructor",
        "type",
        "slug",
        "price",
        "created_at",
        "updated_at",

    ];

    /**
     * course has many course module,  and belongs to one category
     */
    public function courseModules()
    {
        return $this->hasMany(courseModules::class);
    }

    public function instructor()
    {
        return $this->belongsTo(User::class,  'instructor', 'id');
    }

    public function getWithRelationsAttribute()
    {
        $this->load('courseModules.contents', 'instructor');
        return $this;
    }

    protected function  feature(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => explode(".", $value),
        );
    }
    protected function  target(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => explode(".", $value),
        );
    }
    protected function  outcome(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => explode(".", $value),
        );
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
    }

    // protected function  created_at(): Attribute
    // {
    //     return Attribute::make(
    //         //make created_at fild to local time string
    //         get: fn ($value) => Carbon::parse($value)->format("Y-m-d H:i"),
    //         // get: fn (string $value) => explode(".", $value),
    //     );
    // }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'created_at' => 'datetime',
        // 'updated_at' => "datetime",
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];
}
