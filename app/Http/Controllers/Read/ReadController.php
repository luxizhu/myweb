<?php

namespace App\Http\Controllers\Read;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReadController extends Controller
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
        return $id;
//        return view('main.detail',compact('id'));
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
