@extends ('layouts.master')
@section('container')
  <section id="slider">        
  <div class='container'>
        <div>  
            <h1 id="jauta"> ATSAUKSMES</h1>
            <h3>Vari ierakstīt savu atsauksmi, vai vienkārši ierakstīt, ko sirds vēlas!</h3>
            <form id="Form" method="post" action="http://naivist.net/form/">
                <label>E-pasts: *</label> <br>
                <input id="email" type="text" name="email"><br>
                <label>Komentārs:</label> <br>
                <textarea id="coment" name="coment" ></textarea> <br>
                <h3>Ja esi bijs kādā mūsu pasākumā, tad lūdzu ieraksti savu vērtējumu</h3>
                <label>Diena, kad mūs satiki:</label><br>
                <input id="day" type="number" name="day"> <br>
                <label>Mēnesis</label><br>
                <select id="month" name="month">
                            <option value="">--</option>
                            <option>January</option>
                            <option>February</option> 
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select><br>
                        <label>Gads</label><br>
                        <input type="number" name="year" id="year"><br>
                <label>Vērtējums:(1 līdz 10)</label><br>
                <input id="grade" type="number" name="grade"><br>
                <input type="submit" value="submit" id="submit"> <br>
            </form>        
        </div>
  </div>  
  </section>
@endsection



