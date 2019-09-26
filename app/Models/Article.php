<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article__works';

    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'images',
        'video',
        'like',
    ];
    protected $guarded = [

    ];
}
