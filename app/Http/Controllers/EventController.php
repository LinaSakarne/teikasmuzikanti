<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
       public function index(){
        $event=Events::all();
        return view('index-4', compact('event'));  
     }
   public function store(Request $request)
       {
           
           $post=$request->all();
           if($request!=" "){
           $atsauksme=new Events;
           $atsauksme->event= $post['event'];
           $atsauksme->kad= $post['kad'];
           $atsauksme->kur=$post['kur'];
           $atsauksme->save();
           
           return redirect('pasakumi'); 
           }
       }
    
}
