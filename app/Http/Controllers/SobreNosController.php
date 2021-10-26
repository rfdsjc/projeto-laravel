<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos(){
        return view('site.sobre-nos');
    }
}
