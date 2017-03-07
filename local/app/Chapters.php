<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    //
    protected $table = 'chapters';

    protected $fillable = [
        'chapter_id',
        'chapter_serial',
        'chapter_title',
        'chapter_content',
        'view',
       	
    ];
}
