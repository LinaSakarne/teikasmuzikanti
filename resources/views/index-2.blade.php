@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>
            <h1 id="kas">  KAS MĒS ESAM? </h1> 
            
            @foreach ($info as $inf)
            <p>
                {{$inf->info}}
            </p>
            @endforeach
            
            @if (Auth::user())
            
                 {!! Form::open(['url'=>'grupas_info'])!!}
                <div class="form-group">
                    {!!Form::label('info', 'Info:')!!}
                </div>     
                 <div class="form-group">   
                    {!!Form::textarea('info', null, ['class'=>'form-control'])!!}
                 </div> 
                  <div class="form-group">   
                {!!Form::submit('Sūtīt', ['class'=> 'btn btn-primary form-control'])!!}
                </div>
                {!!Form::close()!!}
                
            @endif
        </div>
        <hr>
        <div class="darbiba">
            <h1 id="ko"> KO MĒS DARĀM? </h1>
            <p><i> "Teikas Muzikanti"</i> piedāvā Jums dažādas muzikāli izklaidējošas un izglītojošas aktivitātes:</p>
                <ul>
                    <li> Sadziedāšanos, danču vakarus, viesību spēles, rotaļas utt.</li>
                    <li> Gadskārtu godu svinēšanu 
                        <ol>
                            <li>Ziemassvētki</li>
                            <li>Lieldienas</li>
                            <li>Jāņi</li>
                            <li>Meteņi</li>
                        </ol>
                    </li>
                    <li> Mūža godu svinēšanu (kāzas, mičošana un krustabas)</li>
                    <li> Izklaidējoši informatīvus priekšnesumus par latviešu tradīcijām tūristu grupām.</li>
                </ul> 
        </div> 
        <hr>
        <div class="contacts">
            <h1 id="kontakti"> KONTAKTI </h1>
            
            <p> Mums var zvanīt:</p>
            <ul id="list"> 
               <li><b>Līna 28888223</b></li> 
               <li><b>Kārlis 26420871</b></li>
            </ul> 
            <p> Mums var rakstīt: <br><b> teikasmuzikanti@gmail.com</b></p>
            <p> Mūs var sameklēt sociālajos tīklos:</p>
            <ul id="soc">
                <li> <a href="https://www.facebook.com/teikasmuzikanti"> <img src="/images/Facebook.ico" alt="Facebook"> </a>
                 <a href="https://twitter.com/teikasmuzikanti"><img src="/images/twitterbig.png" alt="Teitter"></a> </li>
            </ul>
        </div>
  </div>  
  </section>
@stop

