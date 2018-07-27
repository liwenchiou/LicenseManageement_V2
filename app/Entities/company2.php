<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class company2 extends Model
{
    public $table = "company2s";
    protected $fillable = [
        'company_en', 'company_cn',
    ];
}
