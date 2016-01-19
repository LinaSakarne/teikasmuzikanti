<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AUsers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AUsersController extends Controller
{
      public function index(){
        $event=AUsers::all();
        return view('register_new', compact('event'));  
     }
     public function index2(){
        $event=AUsers::all();
        return view('delete_user', compact('event'));  
     }
  
     
   public function deleteUser(Request $request)  
   {
            $post=$request->all();
            $i=$post['id'];
            if($i!=" ")
            {       
            AUsers::where('id','=', $i)->delete();
            return redirect('delete_user');     
           }
       
   }
   public function store(Request $request)
       {    
       
           $post=$request->all();
           if($request!=" ")
           {
            $user=new AUsers;
            $user->name=$post['name'];
            $user->email=$post['email'];
            $user->password=bcrypt($post['password']);
            $user->save();
           return redirect('delete_user'); 
           } 
       }
}
