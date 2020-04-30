<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = [
      'name',
      'race',
      'age',
      'owner',
      'description'
    ];
}