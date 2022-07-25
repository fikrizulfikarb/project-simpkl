<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BaseModel;


class Model2 extends BaseModel
{
    protected $keyType = 'string';
    public $incrementing = false;
}