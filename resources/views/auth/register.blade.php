@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>  
 <form method="POST" action="/auth/login">
          <div>
              Email
              <input type="email" name="email" value="{{old('email')}}">
          </div>
            <div>
                Vārds
                <input type="name" name="name">
            </div>
          <div>
              Parole
              <input type="password" name="password" id="password">
          </div>
          <div>
              <button type="submit">Reģistrēt</button>
          </div>
      </form>

</div>  
  </section>
@endsection

