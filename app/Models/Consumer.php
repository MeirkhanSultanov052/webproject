<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $table = "consumer";

    protected $fillable = ['name' ,'surname' ,'adress' ,'photo'  ] ;
}
