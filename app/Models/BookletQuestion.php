<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookletQuestion extends Model
{
    protected $fillable = [
        'booklet_id',
        'marks',
        'answer',
        'image',
        'name',

    ];


    public function booklet()
    {
        return $this->belongsTo(Booklet::class, 'booklet_id', 'id');
    }

    public function answer()
    {
        return $this->hasOne(BookletAnswer::class, 'question_id', 'id');
    }
}
