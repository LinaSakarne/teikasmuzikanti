@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div class="daliba">
            <h1 id="dal"> DALĪBNIEKI</h1>
            <ul>
                <li id="dal1"> 
                    <img src="/images/Lina.jpg" alt="Muzikanti" >
                    <div> <h2>
                            Līna Sakārne</h2>
                    </div></li>          
                <li id="dal2"> 
                    <img src="/images/Karlis.jpg" alt="Muzikanti"> 
                    <div > <h2>
                            Kārlis Briņģis</h2>
                            </div>
                </li>
                <li id="dal3"> 
                    <img src="/images/Katrina.jpg" alt="Muzikanti">
                    <div > <h2>
                            Katrīna Feldmane</h2>
                    </div> 
                </li>
                <li id="dal4">
                    <img src="/images/Janis.jpg" alt="Muzikanti" >
                    <div > <h2> 
                            Jānis Feldmanis</h2>
                    </div> 
                </li>
                <li id="dal5">
                    <img src="/images/Agate.jpg" alt="Muzikanti" >
                    <div ><h2> 
                            Agate Rapa </h2>
                    </div>
                </li>
            </ul>
        </div>   
        <h1 id="Name">  </h1>
        <br>
        <div id="instrumenti"></div>
        <div id="apraksts"><p></p> </div>
 </div>  
</section>
@endsection
