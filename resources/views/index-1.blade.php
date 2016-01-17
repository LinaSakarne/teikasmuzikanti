@extends ('layouts.master')
@section('container')
<section id="slider">        
  <div class='container'>
        <div class="pictures">
            <h1 id="atteli"> GALERIJA </h1>
            <div class="thumbnails">
                <img onmouseover="myPhoto.src=/images/IMG_9974.src" id='IMG_9974' src="/images/IMG_9974.jpg" alt="Muzikanti" />
                <img onmouseover="myPhoto.src=/images/Cin.src" id='Cin' src="/images/Cin.jpg" alt="Muzikanti"/>
                <img onmouseover="myPhoto.src=/images/ALA.src" id="ALA" src="/images/ALA.jpg" alt="Muzikanti"/>
                <img onmouseover="myPhoto.src=/images/Meteni.src" id="Meteni" src="/images/Meteni.png" alt="Muzikanti"/>
                <img onmouseover="myPhoto.src=/images/Valmiermuiza.src" id="Valmiermuiza" src="/images/Valmiermuiza.jpg" alt="Muzikanti"/>
                <img onmouseover="myPhoto.src=/images/Kekatas.src" id="Kekatas" src="/images/Kekatas.jpg" alt="Muzikanti"/> 
            </div>
        </div>   
        <div class='photos' >
            <img id="myPhoto" src="/images/ALA.jpg" alt="Muzikanti"/> 
        </div>
  </div>
</section>
@endsection

