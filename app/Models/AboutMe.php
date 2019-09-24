<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $casts = [
        'skills' => 'json',
        'company' => 'json',
        'evaluation_content' => 'json',
        'project_experience' => 'json',
    ];
    //白名单   **白名单与黑名单只能存在其一
    protected $fillable = [
        'name',
        'sex',
        'birthday',
        'mobile',
        'job',
        'QQ',
        'weChat',
        'email',
        'skills',
        'company',
        'evaluation_content',
        'project_experience',
        'position'
    ];
}
