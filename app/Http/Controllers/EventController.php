<?php

namespace App\Http\Controllers;
use App\User;
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
     public function index2(){
        $event=Events::all();
        return view('dzest_piedavajumu', compact('event'));  
     }
     public function index3(){
        $event=Events::all();
        return view('ievietot_piedavajumu', compact('event'));  
     }
     
   public function deleteEvent(Request $request)  
   {
        
           $post=$request->all();
            $i=$post['id'];
            if($i!=" ")
            {       
            Events::where('id','=', $i)->delete();
            return redirect('pasakumi');     
           }
       
   }
   public function store(Request $request)
       {    
       
           $post=$request->all();
           if($request!=" ")
           {
            $atsauksme=new Events;
            $atsauksme->event=$post['event'];
            $atsauksme->kad= $post['kad'];
            $atsauksme->kur=$post['kur'];
            $atsauksme->save();
           return redirect('pasakumi'); 
           } 
       }
}
