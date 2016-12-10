<?php

namespace App\Http\Controllers\Main;

use App\People;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function getList(){
        $peoples = People::all();
        return view('main.list',compact('peoples'));
    }

    public function index(){
        return view('main.main');
    }

    public function create(){
        echo 'create';
    }

    public function store(Request $request){
        echo 'store';
    }

    public function show($id){
        if(!is_null($id)){
            switch($id) {
                case "lan":
                    return  redirect()->action("Lan\LanController@index");
                case "read":
                    return redirect()->action("Read\ReadController@index");
                case "know":
                    return redirect()->action("Know\KnowController@index");
                case "use":
                    return redirect()->action("MyUse\MyUseController@index");
                default:
                    return "";
            }
        }
//        $people = People::find($id);
//        return view('main.detail',compact('people'));
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
