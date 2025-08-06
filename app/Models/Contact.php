<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'service_interested',
        'project_budget',
        'message',
        'subscribe_newsletter',
    ];
}
