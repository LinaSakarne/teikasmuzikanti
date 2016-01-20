@extends ('layouts.master')
@section('container')
<section id="slider">        
  <div class='container'>
        <div class="pictures">
            <h1 id="atteli"> {{trans('messages.GALERIJA')}} </h1>
            <div class="thumbnails">
                 <img onmouseover="myPhoto.src=/images/IMG_9974.jpg.src" id='IMG_9974' src="/images/IMG_9974.jpg" alt="Muzikanti" />
                @foreach ($ats as $img)
                
                 <img onmouseover="myPhoto.src={{$img->name}}.src" id='IMG_9974' src="{{$img->name}}" alt="Muzikanti" />
                @endforeach
            </div>
        </div>   
        <div class='photos' >
            <img id="myPhoto" src="/images/IMG_9974.jpg" alt="Muzikanti"/> 
        </div>
      @if(Auth::user())
      <h3> Ievieto jaunu bildi</h3>
       {!! Form::open(array('action'=> 'PhotoController@imageUpload', 'files'=>'true'))!!}
                <div class="form-group">
                    {!!Form::label('image', 'Izvēlies bildi:')!!} 
                </div>  
       <div class='text-danger'>{{$errors->first('image')}}</div>
                 <div class="form-group">   
                    {!!Form::file('image', ['class'=>'form-control','files'=>'true'])!!}
                 </div>   
                <div class="form-group">   
                    {!!Form::submit('Sūtīt', ['class'=> 'btn btn-primary form-control','files'=>'true'])!!}
                </div>
                    {!!Form::close()!!}
                   
                    
                    
      @endif
      
  </div>
</section>
@endsection

