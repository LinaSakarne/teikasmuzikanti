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
               
                
<!--            <h3>Ja esi bijs kādā mūsu pasākumā, tad lūdzu ieraksti savu vērtējumu</h3>
                <label>Diena, kad mūs satiki:</label><br>
                <input id="day" type="number" name="day"> <br>
                <label>Mēnesis</label><br>
                <select id="month" name="month">
                            <option value="">--</option>
                            <option>January</option>
                            <option>February</option> 
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select><br>
                        <label>Gads</label><br>
                        <input type="number" name="year" id="year"><br>
                <label>Vērtējums:(1 līdz 10)</label><br>-->
                <!--<input id="grade" type="number" name="grade"><br>-->
              
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



