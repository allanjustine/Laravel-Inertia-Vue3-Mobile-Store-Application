<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = ['cellphone_id', 'android_version', 'ram', 'rom', 'chipset', 'camera', 'price', 'battery'];

    public function cellphone() {
        return $this->belongsTo('App\Models\Cellphone');
    }
}
