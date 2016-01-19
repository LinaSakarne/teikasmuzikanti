
<!DOCTYPE html>
<html>
    <head>
        <title>Teikas Muzikanti</title>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
         <script src="/js/script.js"></script>
	
        <link rel="stylesheet" href="/css/newcss.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>  
    </head>
    <body>
            <div class="menus">
                <ul id="abc-menu"> 
                   <li><a href="/grupas_info">{{trans('messages.PAR MUMS')}}</a></li>
                    <li><a href="/dalibnieki">{{trans('messages.DALĪBNIEKI')}}</a></li>
                    <li><a href="/galerija">{{trans('messages.GALERIJA')}}</a></li>
                    <li><a href="/pasakumi">{{trans('messages.PASĀKUMI')}}</a></li>
                    <li><a href="/atsauksmes">{{trans('messages.ATSAUKSMES')}}</a></li>
                    <li>    </li>    
                    <li>    </li>
                    <li>    </li>
                    <li> <div class="lang"><a href="/lang/lv"><u>LV</u></a><a>  </a><a href="/lang/en"><u>EN</u></a></div></li> 

                @if (Auth::guest())
                    <li><a href="/login">{{trans('messages.IENĀKT')}}</a></li>
                @else  
                    <li><a href="/logout">IZIET</a><li>
                    @if(Auth::user()->name == 'Administrator')
                    <li><a href="/lietotaji"> LIETOTĀJI </a></li>
                    @endif
                @endif
                 
                </ul>   
            </div>    
        <div class="Main_img">
            <img src="/images/TM.jpg" alt="Muzikanti">
        </div>
        <hr>
        
       @section ('container')
       @show
       <hr>
        <div class="footer">
            <p>This page was created by Līna Sakārne in 2016</p>
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

