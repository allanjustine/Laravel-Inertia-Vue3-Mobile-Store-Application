<?php

namespace App\Http\Controllers;
use App\Models\Cellphone;

use Illuminate\Http\Request;

class CellphoneController extends Controller
{
    public function index() {
        $cellphones = Cellphone::with('specifications')->get();

        return inertia('Cellphone',[
            'cellphones' => $cellphones
        ]);
    }
}
