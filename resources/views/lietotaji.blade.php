@extends ('layouts.master')
@section('container')
  <section id="slider">
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
               @if (Auth::user()->name=='Administrator')
                <a href="/register_new">REĢISTRĒT JAUNU LIETOTĀJU</a>
                <br>
                <a href="/delete_user">DZĒSTLIETOTĀJU LIETOTĀJU</a>
               @endif 
            </div>
        </div>
    </div>
</div>
  </section>
@endsection
