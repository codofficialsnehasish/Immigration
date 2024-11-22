<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ContactUs extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable =[
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];
}
