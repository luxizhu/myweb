<?php

namespace App\Http\Controllers\Lan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanController extends Controller
{
    public function index(){
        return view('commPage.lanCommon');
    }

    public function create(){
        echo 'create';
    }

    public function store(Request $request){
        echo 'store';
    }

    public function show($id){
        if(!is_null($id)){
            switch($id){
                case "php":
                    return view("lan.lanIndex")->with('course','php');
                case "java":
                    return view("lan.lanIndex")->with('course','java');
                case "python":
                    return view("lan.lanIndex")->with('course','python');
                case "html":
                    return view("lan.lanIndex")->with('course','html');
                case "js":
                    return view("lan.lanIndex")->with('course','js');
                default:
                    return $id;
            }
        }else{
            return "error";
        }
    }
    public function edit($id){
        echo 'edit';
    }

    public function update(Request $request, $id){
        echo 'update';
    }

    public function destroy($id){
        echo 'destroy';
    }
}
