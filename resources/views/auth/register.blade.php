@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>  

  <h3>Reģistrēt jaunu lietotāju</h3>

  {!! Form::open(array('url' => 'auth/register')) !!}

  <table style="font-size: 20px; line-height: 2em;" id="form">

  @foreach($errors->get('fullname') as $message)
  <tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
  @endforeach
  <tr><td>
  {!! Form::label('fullname', 'Vārds') !!}
  </td><td>
  {!! Form::text('fullname') !!}
  </td></tr>

  @foreach($errors->get('email') as $message)
  <tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
  @endforeach
  <tr><td>
  {!! Form::label('email', 'E-pasts') !!}
  </td><td>
  {!! Form::email('email') !!}
  </td></tr>

  @foreach($errors->get('password') as $message)
  <tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
  @endforeach
  <tr><td>
  {!! Form::label('password', 'Parole') !!}
  </td><td>
  {!! Form::password('password') !!}
  </td></tr>

  <tr><td>
  {!! Form::label('password_confirmation', 'Paroles apstiprinājums') !!}
  </td><td>
  {!! Form::password('password_confirmation') !!}
  </td></tr>

  <tr><td colspan="2">
  {!! Form::submit('Reģistrēt') !!}
  </td></tr>

  </table>

  {!! Form::close() !!}

    </div>  
  </section>
@endsection

