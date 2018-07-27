<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $table = "events";
    protected $fillable = ['title','start_date','end_date'];
}
