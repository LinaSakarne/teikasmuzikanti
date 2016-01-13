/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $("li").click(function() {
        var showInfo = $(this).attr("id");
        switch (showInfo) {
            case "dal1":
                $("#Name").text("Līna Sakārne");
                $("#instrumenti").text("Strinkšķinātaja, spēlē kokli un ukuleli");
                $("#apraksts").text("Līnas dzīve ar mūziku saistīta jau kopš dzimšanas, taču tieši ar folkmūziku pēdējos 9 gadus, kad nedaudz negribīgi sāka mācīties\n\
spēlēt kokli folkloras kopā Kokle. Tomēr augot un laikam ejot iepatikās gan kokle, gan folkmūzika, kas šodien ir kļuvušas par Līnas ikdienu, darbu un mīlestību. \n\
Līna ir kārtīgs Teikas Muzikants, jo visu savu dzīvi pavadījusi Teikā. Teikas Muzikantu sastāvā Līna gan dejo, gan dzied, gan muzicē.");
                break;
            case "dal2":
                $("#Name").text("Kārlis Briņģis");
                $("#instrumenti").text("Svilpotājs, spēlē blokflautas, stabuli, dūdas");
                $("#apraksts").text("Es iepazinos ar folkloru vairāk kā pirms 12 gadiem, kad mani paziņas uzaicināja paskatīties\n\
Lieldienu koncertu. Tā kā biju dejotājs, sapratu, ka arī folklorā ir gan dejas, dan dziemsas, gan muzicēšana, un nolēmu, ka varētu iesaistīties\n\
folkloras kopā Kokle. Tā nu 12 gadu laikā, sākot savu muzikālo karjeru ar šeikeri, nonācu arī līdz pūšamajiem instrumentiem - blokflautas,\n\
stabules un dūdas. Pēdējo divu gadu laikā esam izveidojuši savu tautas mūzikas grupu Teikas Muzikanti, kurā tad arī pilnveidoju\n\
savas zināšanas gan dejā, gan mūzikā.");
                break;
            case "dal3":
                $("#Name").text("Katrīna Feldmane");
                $("#instrumenti").text("Čīgātāja, spēlē vijoli");
                $("#apraksts").text(" Tā kā mana mamma  ir folkloras kopas Budēļi vadītāja, man sanāca uzaugt ar folkmūziku \n\
un tradicionālo kultūru jau kopš agras bērnības. Mani interesēja un patika gan dziesmas, gan gadskārtu ieražu un godu svinēšana. \n\
12 gadu vecumā mani mamma aizveda piedalīties vienā no pirmajām Bērnu folkloras nometnēm Trejdeviņi spēlmanīši, \n\
kur dažādu vecumu bērni sabrauca no visas Latvijas, lai apgūtu mūzikas instrumentu spēli, tradicionālās dziedāšanas prasmes, \n\
latviešu dejas un dančus. šeit iepazinos ar folkloras kopas Kokle vadītāju Dinu Liepu un vēlāk jau pievienojos šai kopai.  \n\
Līdz ar to folklora kļuva ne tikai par hobiju, bet gan par dzīvesveidu. Caur folkloru mēs varam iepazīt paši sevi, \n\
savas tautas kultūru. Nest to tālāk gan ārpus Latvijas, gan mācīt saviem tautiešiem. \n\
Folklorā ir tik daudz dažādu veidu kā izpausties, ka katrs var atrast savu īsto vietu.");
                break;
            case "dal4":
                $("#Name").text("Jānis Feldmanis");
                $("#instrumenti").text("Vilcējs un čupā grūdējs, spēlē akordeonu");
                $("#apraksts").text("Sāka dejot tautasdejas kolektīvā Zelta Sietiņš kopā ar puišiem, kas tajā laikā jau darbojās\n\
folkloras kopā Kokle. Kad Kārlis uzzināja, ka spēlēju akordeonu, uzaicināja mani uz Kokli. Koklē man iepatikās tautas mūzika, draudzīgā kompānija\n\
un ārzemju braucieni. Man patīk tautas mūzikā atklāt jaunus veidus kā skatīties uz dažādām lietām un dzīvi kopumā. \n\
Jo vairāk es uzzinu, jo vairāk saprotu, ka ir vēl daudz neatklātā. Pastāvīgi sanāk svinēt gadskārtu ieražas un godus, kurus sinot\n\
un mācot svinēt citiem, pats iemācos daudz ko jaunu. ");
                break;
            case "dal5":
                $("#Name").text("Agate Rapa");
                $("#instrumenti").text("Bungeldzindzele, spēlē mandolīnu, bungas un vijoli");
                $("#apraksts").text("Pateicoties savai vecmāmiņai, 2000. gadā tiku aizvesta uz Rīgas Skolēnu pils pulciņu Kokle. Tur\n\
mācījos pie skolotājas Dinas Kalniņas, kura iepazīstināja ar latviešu tautas mūzikas instrumentiem un dziesmām. Kopš\n\
tā laika folklora kļuva par ikdienas sastāvdaļu. Folklora, tautas dziesma, kokles ir mūsu tautas gara mantojums, laikmeta spogulis.\n\
Tās vērtība un trauslums ir būtiski iemesli, lai to iepazītu, sargātu un likt sadzirdēt citiem. ");
                break;
            default:
                break;
        }
    });
});


   $(document).ready(function(){
    document.getElementById("Form").addEventListener('submit', function(e) {
        
        var ok=true;
        if (document.getElementById("email").value === "") {
            alert("Lūdzu norādiet e-pasta adresi");
            e.preventDefault();
            ok=false;
            return false;
        }
        
        if(document.getElementById("day").value!=="" &&(document.getElementById("day").value<1 || document.getElementById("day").value>31)){
            alert("Dienai jābūt satarp 1 un 31");
           e.preventDefault();
            ok=false;
            return false;
        }
        if(document.getElementById("year").value!=="" &&(document.getElementById("year").value<2000 || document.getElementById("year").value>2015)){
            alert("Nepareizi ievadīts gads");
            e.preventDefault();
            ok=false;
            return false;
        }
        if (document.getElementById("grade").value!=="" &&(document.getElementById("grade").value<1 ||document.getElementById("grade").value>10)){
            alert("Vērtējumam jābūt satarp 1 un 10");
            e.preventDefault();
            ok=false;
            return false;
        }
        
        if(ok===true){
            alert("Iesūtīts");
        }
     
});
});

var myImage=document.getElementById("myPhoto");
var imageArray=["/IMG_9974.jpg", "/images/Cin.jpg", "/images/ALA.jpg", "/images/Meteni.png", "/images/Valmiermuiza.jpg", "/images/Kekatas.jpg"];
var imageIndex=0;

function changeImage(){
    myPhoto.setAttribute("src", imageArray [imageIndex]);
    imageIndex++;
    if (imageIndex>=imageArray.length) {
        imageIndex=0;
    }
};
var intervalHandle = setInterval(changeImage, 5000);

myPhoto.onlcick=function(){
    clearInterval(intervalHandle);
};