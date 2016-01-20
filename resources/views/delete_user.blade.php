@extends ('layouts.master')
@section('container')
<section id="slider"> 
<div class="container">
    <div class="row">
       @if (Auth::user()->name=='Administrator')
       <table>
           <th>LIETOTĀJA ID</th>
            <th>LIETOTĀJA VĀRDS</th>
            <th> LIETOTĀJA E-PASTS</th>
       @foreach($event as $user)
        <tr>
             <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
       </table>
        {!! Form::open(array('action'=> 'AUsersController@deleteUser'))!!}
             <div class="form-group">
                    {!!Form::label('id', 'Lietotāja ID:')!!}
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
