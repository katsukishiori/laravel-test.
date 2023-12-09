<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = [
        'first-name',
        'last-name',
         'gender', 
         'email',
         'first_tel',
         'second_tel',
         'third_tel',
         'address', 
         'building', 
         'detail'
    ];
}
