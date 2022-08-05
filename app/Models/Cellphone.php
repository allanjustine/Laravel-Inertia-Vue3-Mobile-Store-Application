<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellphone extends Model
{
    use HasFactory;

    protected $fillable = ['brand_name', 'model'];

    public function specifications() {
        return $this->hasMany('App\Models\Specification');
    }
}
