<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atsauksmes;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AtsauksmesController extends Controller
{

       public function index()
       {
            $ats=Atsauksmes::all();
            return view('index-5', compact('ats'));  
       } 
       
       public function index2()
       {
            $ats=Atsauksmes::all();
            return view('dzest_atsauksmes', compact('ats'));  
       }
       public function store(Request $request)
       {
           
           $post=$request->all();
           if($request!=" "){
           $atsauksme=new Atsauksmes;
           $atsauksme->email= $post['email'];
           $atsauksme->name= $post['name'];
           $atsauksme->atsauksme=$post['coment'];
           $atsauksme->save();
           
           return redirect('atsauksmes'); 
           }
       } 
       public function deleteAts(Request $request){
            $post=$request->all();
            $i=$post['id'];
            if($i!=" ")
            {       
            Atsauksmes::where('id','=', $i)->delete();
            return redirect('atsauksmes');     
           }
       }
}
