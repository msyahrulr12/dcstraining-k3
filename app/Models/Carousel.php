<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carousel extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function getAll($lang = 'id')
    {
        return $this->where('active', true)->where('language', $lang)->get();
    }
}
