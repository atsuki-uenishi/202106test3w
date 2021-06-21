<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function building($room) {
        return '部屋番号は'.$room.'です';
    }
}
