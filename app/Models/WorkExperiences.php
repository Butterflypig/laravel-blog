<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperiences extends Model
{
    protected $table = 'work__experiences';

    //
    public function PersonalInformation()
    {
        return $this->belongsTo(PersonalInformation::class);
    }
}
