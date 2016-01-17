
@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>  
        <hr>
           <form method="POST" action="/auth/login">
          <div>
              Email
              <input type="email" name="email" value="{{old('email')}}">
          </div>
          <div>
              Parole
              <input type="password" name="password" id="password">
          </div>
          <div>
              <button type="submit">Ienākt</button>
          </div>
      </form>
</div>  
  </section>
@endsection