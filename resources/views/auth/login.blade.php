
@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>  

    <table style="font-size: 20px; line-height: 2em;" id="form">

    <tr><td>
    {!! Form::label('email', 'E-pasts') !!}
    </td><td>
    {!! Form::email('email') !!}
    </td></tr>

    <tr><td>
    {!! Form::label('password', 'Parole') !!}
    </td><td>
    {!! Form::password('password') !!}
    </td></tr>

    <tr><td>
    {!! Form::label('remember_me', 'Atcerēties mani') !!}
    </td><td>
    {!! Form::checkbox('remember_me') !!}
    </td></tr>

    <tr><td colspan="2">
    {!! Form::submit('Ienākt') !!}
    </td></tr>

    </table>

    {!! Form::close() !!}
    </div>  
 </section>
@endsection