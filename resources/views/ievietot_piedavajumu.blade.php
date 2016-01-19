@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>
            <h1 id="pasakumi"> PASĀKUMI </h1>
            <p> Tuvākie pasākumi, kur mūs varēs satikt:</p>
             @foreach($event as $events)
                <p><b>ID:{{$events->id}}  -  </b> {{$events->kad}}{{$events->kur}} {{$events->event}}</p>
            @endforeach 
 
            
            @if(Auth::user())
        {!! Form::open(array('action'=> 'EventController@store'))!!}
                <div class="form-group">
                    {!!Form::label('event', 'Pasākums:')!!}
                </div>     
                 <div class="form-group">   
                    {!!Form::text('event', null, ['class'=>'form-control'])!!}
                 </div>      
                <div class="form-group">
                    {!!Form::label('kad', 'Kad:')!!}
                 </div>   
                   
                <div class="form-group">
                    {!!Form::text('kad', null, ['class'=>'form-control'])!!}
                 </div>   
                    
                <div class="form-group">    
                    {!!Form::label('kur', 'Kur:')!!}
                </div>    
                    
                <div class="form-group">    
                    {!!Form::text('kur', null, ['class'=>'form-control'])!!}
                </div>    
                 <div class="form-group">   
                {!!Form::submit('Sūtīt', ['class'=> 'btn btn-primary form-control'])!!}
                </div>
                {!!Form::close()!!}
              @endif 
             
        </div>
        <br>
  </div>  
 </section>
@endsection

