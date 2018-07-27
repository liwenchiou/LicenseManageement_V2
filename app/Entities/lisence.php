<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class lisence extends Model
{
    public $table = "lisences";
    protected $fillable = [
        'lisence_en', 'lisence_cn', 'lisence_code','lisence_num'
    ];
}
