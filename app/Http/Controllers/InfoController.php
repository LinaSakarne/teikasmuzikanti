<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{

    public function index(){
        $info=Info::all();
       
        return view('index-2', compact('info'));  
    }
    public function store(Request $request)
       {
           
           $post=$request->all();
           if($request!=" "){
          $i=$post['info'];
            if($i!=" "){
                
                Info::where('id', 1)->update(array('info' =>  $i));
            }
           
           return redirect('grupas_info'); 
           }
           
       }
    
}
