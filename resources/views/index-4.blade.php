@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>
            <h1 id="pasakumi"> PASĀKUMI </h1>
            <p> Tuvākie pasākumi, kur mūs varēs satikt:</p>

            @foreach($event as $events)
                <p><b> {{$events->kad}}</b> {{$events->kur}} {{$events->event}}</p>
            @endforeach 
            <p>Būsim sastopami vairākās kāzās, varbūt tur mums negaidīti sanāks satikties? </p><br> 
            @if (Auth::user())
              <li><a href="/dzest_piedavajumu">DZĒST PASĀKUMU</a></li>
              <li><a href="/ievietot_piedavajumu">IEVIETOT PASĀKUMU</a></li>
            @endif
             
        </div>
        <br>
  </div>  
 </section>
@endsection

