@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>  
            <h1 id="jauta"> ATSAUKSMES</h1>
            
            @if(Auth::user()->name=='Administrator')  
            <br>
            <h3>ATSAUKSMES</h3>   

            @foreach($ats as $at) 
            <table>
            <tr>
                <td>ATSAUKSMES ID: {{$at->id}}</td>
                <td> <h4>{{$at->name}}<h4></td>
                <td>{{$at->atsauksme}}</td>
            </tr>
              </table>
            @endforeach
            {!!Form::open(array('action'=>'AtsauksmesController@deleteAts'))!!}
                <div class="form-group">    
                    {!!Form::label('id', 'Atsauksmes ID:')!!}
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
  </div>  
  </section>
@endsection



