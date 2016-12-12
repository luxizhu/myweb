<?php

namespace App\Http\Controllers\Lan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JAVAController extends Controller
{
    public function index(){
        return view('lan.lanCommon')->with('course','java');
    }
}
