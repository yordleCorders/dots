<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'date_recieved',
        'date_released',
        'date_recieved_as_per_dots',
        'date_released_as_per_dots',
        'appropriation',
        'user_id',
        'section_id',
        'document_id',
        'remarks'
    ];
}
