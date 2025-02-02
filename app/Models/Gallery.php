<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function findOne($id)
    {
        return $this->where('active', true)->where('id', $id)->first();
    }

    public function getAll($paginate = 0)
    {
        if ($paginate > 0) {
            return $this->where('active', true)->paginate($paginate);
        }

        return $this->where('active', true)->get();
    }
}
