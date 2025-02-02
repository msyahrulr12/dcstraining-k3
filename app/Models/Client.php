<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function findOne($lang = 'id')
    {
        return $this->where('active', true)->first();
    }

    public function getAll($lang = 'id')
    {
        return $this->where('active', true)->get();
    }
}
