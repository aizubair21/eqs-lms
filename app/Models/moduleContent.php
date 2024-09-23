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
        'batch_id',
        'title',
        'type',
        "type_icon",
        'description',
        'content',
        'status',
        'created_at',
        'updated_at'

    ];

    public function Module()
    {
        return $this->belongsTo(Module::class, "module_id");
    }
}
