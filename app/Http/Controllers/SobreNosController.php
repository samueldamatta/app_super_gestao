<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobroNosController extends Controller
{
    public function sobrenos() {
        return view('site.sobre-nos');
    }
}
