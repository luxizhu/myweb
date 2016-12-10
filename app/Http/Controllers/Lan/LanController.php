<?php

namespace App\Http\Controllers\Lan;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanController extends Controller
{
    public function index(){
        return view('lan.lanIndex');
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
                case "varLearn":
                    return view("lan.varLearn");
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
