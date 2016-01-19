@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>  
            <h1 id="jauta"> ATSAUKSMES</h1>
            
            @if(Auth::guest())  
            <h3>Vari ierakstīt savu atsauksmi, vai vienkārši ierakstīt, ko sirds vēlas!</h3> 
           
            {!! Form::open(['url'=>'atsauksmes'])!!}
                <div class="form-group">
                    {!!Form::label('email', 'E-pasts:')!!}
                </div>     
                 <div class="form-group">   
                    {!!Form::text('email', null, ['class'=>'form-control'])!!}
                 </div>      
                <div class="form-group">
                    {!!Form::label('name', 'Vārds:')!!}
                 </div>   
                   
                <div class="form-group">
                    {!!Form::text('name', null, ['class'=>'form-control'])!!}
                 </div>   
                    
                <div class="form-group">    
                    {!!Form::label('name', 'Komentārs:')!!}
                </div>    
                    
                <div class="form-group">    
                    {!!Form::textarea('coment', null, ['class'=>'form-control'])!!}
                </div>    
                   
                 <div class="form-group">   
                {!!Form::submit('Sūtīt', ['class'=> 'btn btn-primary form-control'])!!}
                </div>
                {!!Form::close()!!}
            @endif
            @if(Auth::user()->name=='Administrator')
                  <li><a href="/dzest_atsauksmes">DZĒST ATSAUKSMES</a></li>
            @endif
            <br>
            <h3>ATSAUKSMES</h3>   
            
            @foreach($ats as $at) 
            <table>
            <tr>
                <td> <h4>{{$at->name}}<h4></td>
                <td>{{$at->atsauksme}}</td>
            </tr>
              </table>
            @endforeach
           
                   
        </div>
  </div>  
  </section>
@endsection



