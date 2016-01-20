<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class PhotoController extends Controller
{
      public function index()
       {
            $ats=Photo::all();
            return view('index-1', compact('ats'));  
       }
      
 
       
      public function imageUpload(Request $request)
      {

          $rules =['image' => 'required|image|mimes:jpeg',];        
          $validator=Validator::make($request->all(), $rules);
   
          if($validator->fails()){
            return redirect('galerija')->withErrors($validator);  
          }

          else{
            $name1=str_random(6).'.jpg';
            $request->file('image')->move('images/web/', $name1);
             $photo=new Photo;
             $photo->name='images/web/'.$name1;
             $photo->save();
             return redirect('galerija');
          }
    

        
      } 
}
