<?php

namespace App\Http\Controllers\Lan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PHPController extends Controller
{
    public function index(){
        return view('lan.lanCommon')->with('course','php');
    }

    public function show($id){
        if(!is_null($id)){
            switch($id){
                case "varLearn":
                    return view("lan.varLearn");
                default:
                    return $id;
            }
        }else{
            return "error";
        }
    }
}
