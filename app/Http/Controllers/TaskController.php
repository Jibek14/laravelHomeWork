<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function insertform(){
        return view('task_create');
}
    public function insert(Request $request){
        $body = $request->input('user_text');
        $successful = $request->input('do_it');
        $user_id=$request->input('user_id');
        $data=array('body'=>$body,"successful"=>$successful,
            "user_id"=>$user_id,'time'=>date("Y-m-d H:i"),
            'created_at'=>date("Y-m-d H:i"),
            'updated_at'=>date("Y-m-d H:i")
            );
        DB::table('tasks')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
