<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    protected $table='danhmucs';
    protected $fillable = ["name","description"];
    public $timestamps = true;
}
