<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\course_module as Module;

class moduleContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'title',
        'type',
        'description',
        'content',
        'status'        
    ];

    public function Module()
    {
        return $this->belongsTo(Module::class, "module_id");
    }
}
