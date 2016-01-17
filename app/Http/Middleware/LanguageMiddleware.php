<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
class LanguageMiddleware  { 
//      Handle an incoming request.
//    @param  Request  $request
//    @param  Closure  $next
//    @return mixed
     
    public function handle($request, Closure $next)
   {
       $lang = $request->cookie('language');
       if (!empty($lang)) {
         App::setLocale($lang);
       }
 return $next($request);

   }
 	
}


