@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>
            <h1 id="pasakumi"> PASĀKUMI </h1>
            <p> Tuvākie pasākumi, kur mūs varēs satikt:</p>
            
                <p><b> 20.02.2016.</b> Folklubā "Ala" no 21:00 muzicēsim līdz pusnaktij</p>
                <p><b> 28.02.2016.</b>Brīvdabas muzejā svinēsim Meteņus visas dienas garumā.</p>
                <p><b> 19.04.2016.</b> Kokneses ziņģē rādīsim savas prasmes 19:00 Kokneses kuultūras namā.</p>

                <form action="insert.php" method="post">     
                    Pasākums: <input type="text" name="events" />
                    Kad: <input type="text" name="kad" />
                    Kur: <input type="text" name="kur" />
                         <input type="Submit" />
                         </form>
         
 
<!--//          $conn=new mysqli('localhost', 'teikas', 'teikas','teikas')
//                  $sql="SELECT id, event, kad, kur FROM events";
//                  $result=$conn->query($sql);
//                  while($row=$result->fetch_assoc()){
//                      echo §row["event"]."<br>";
                     
//                  }-->
                 
            <p>Būsim sastopami vairākās kāzās, varbūt tur mums negaidīti sanāks satikties? </p><br> 
        </div>
        <br>
  </div>  
 </section>
@endsection

