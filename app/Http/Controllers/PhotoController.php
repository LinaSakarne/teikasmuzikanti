<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
      public function index()
       {
            $ats=Photo::all();
            return view('index-1', compact('ats'));  
       }
       
      public function imageUpload(Request $request)
      {
//         $file=$request->file('file');
//         $file=Input::file('file');
         $filename='images/'.uniqid();
         $file->move( $filename);
      } 
}
