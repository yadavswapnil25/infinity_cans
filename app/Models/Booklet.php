<?php

namespace App\Models;

use App\Models\ExamEnrollment;
use Illuminate\Database\Eloquent\Model;

class Booklet extends Model
{
    protected $fillable = [
        'name',
        'color',
        'status',
        'created_by',
    ];

    public function examEnrollment(){
        return $this->hasOne(ExamEnrollment::class, 'booklet_id', 'id');
    }

    public function questions(){
        return $this->hasMany(BookletQuestion::class);
    }

    public function answers(){
        return $this->hasMany(BookletAnswer::class);
    }
}
