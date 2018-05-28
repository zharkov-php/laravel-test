<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
//выводим те статьи где статус 1
    public static function incomplete(){
        return static::where('status', 1)->get();
    }
}
