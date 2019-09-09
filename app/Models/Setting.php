<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $casts = [
        'evaluation_content' => 'array',
        'project_experience' => 'array',
        'company' => 'array'
    ];


    protected $table = 'setting';

    public $timestamps = false;

    protected $guarded = [];
}
