<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable=['content'];

    public function user() // 単数形
    {
        return $this->belongsTo('App\User');
    }
}
