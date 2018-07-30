<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    public $table = "lisencesdatas";
    protected $fillable = [
        'company', 'company_2','name','ip','type','comm'
    ];

}
