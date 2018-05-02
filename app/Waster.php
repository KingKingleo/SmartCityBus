<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waster extends Model
{
    protected $fillable = ['location','name','phone','organization','email'];
}
