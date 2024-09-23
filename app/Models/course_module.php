<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\moduleContent;

class course_module extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        "title",
        "type",
        "type_icon",
        "course_id",
        "batch_id",

        "created_at",
        "updated_at",

    ];


    /**  
     * course module cotent has belongs to course moule.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get all the content belongs to this course module
     */
    public function  contents()
    {
        return $this->hasMany(moduleContent::class, "module_id", "id");
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'created_at' => 'datetime',
        // 'updated_at' => "datetime",
    ];
}
