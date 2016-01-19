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
            {!! Form::open(array('action'=> 'EventController@deleteEvent'))!!}
             <div class="form-group">
                    {!!Form::label('id', 'Pasākuma ID:')!!}
                </div>     
                <div class="form-group">   
                    {!!Form::number('id', null, ['class'=>'form-control'])!!}
                </div>    
                <div class="form-group">   
                {!!Form::submit('Dzēst', ['class'=> 'btn btn-primary form-control'])!!}
                </div>
             {!!Form::close()!!}
            @endif
        </div>
        <br>
  </div>  
 </section>
@endsection

