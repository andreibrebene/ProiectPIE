<?php
$servername = "localhost";
$username = "id3278032_sql_pie";
$password = "proiectpie";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$nume = $_POST["nume"];
$mail = $_POST["mail"];
$mesaj = $_POST["mesaj"];

$sql = "INSERT INTO id3278032_sql_pie.contact (nume, mail, mesaj)
VALUES ('$nume', '$mail', '$mesaj')";
if ($conn->query($sql) === TRUE) { ?>



<!DOCTYPE html>
<html>
<title>Proiect - PIE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon"/>
<body id="myPage">
<style>
    
    .produse {
    background-color: gray;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
}

.produse:hover {
    background-color: #555555;
    color: white;
}

.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}
    
</style>
<!-- Navbar -->
<div class="w3-top w3-black">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Gionee</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Telefoane <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="a1.php" class="w3-bar-item w3-button">Gionee A1 Plus</a>
      <a href="a1.php" class="w3-bar-item w3-button">Gionee A5 Pro</a>
      <a href="a1.php" class="w3-bar-item w3-button">Gionee X10</a>
    </div>
  </div>
      <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Tablete <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="a1.php" class="w3-bar-item w3-button">Gionee NANO X4</a>
      <a href="a1.php" class="w3-bar-item w3-button">Gionee Tab II</a>
      <a href="a1.php" class="w3-bar-item w3-button">Gionee Tab III</a>
    </div>
  </div>
      <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Smartwatch <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="a1.php" class="w3-bar-item w3-button">Gionee Gear V2</a>
      <a href="a1.php" class="w3-bar-item w3-button">Gionee Classic</a>
      <a href="a1.php" class="w3-bar-item w3-button">Gionee V2 Plus</a>
    </div>
  </div>
  <a href="stiri.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Stiri</a>
  <a href="suport.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Support clienti</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>
</div>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>





<!-- Image Header -->

<div class="slider w3-display-container w3-animate-opacity">
  <img class="mySlides" src="images/1.jpg" style="width:100%;min-height:350px;max-height:600px;">
  <img class="mySlides" src="images/2.jpg" style="width:100%;min-height:350px;max-height:600px;">
  <img class="mySlides" src="images/3.jpg" style="width:100%;min-height:350px;max-height:600px;">
  
	<div class="w3-container w3-dark-grey w3-padding w3-xlarge">
	<div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
	<div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    </div>
	</div>

  
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>


<!-- Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2 style="font-family:verdana;">Ultimele produse</h2>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/produse.jpg" alt="smartphone a1" style="width:45%" class="w3-hover-opacity">
  <h3>GIONEE A1</h3>
  <button class="produse buton1">Click pentru detalii</button>
</div>

<div class="w3-quarter">
  <img src="images/produse.jpg" alt="smartphone a1" style="width:45%" class="w3-hover-opacity">
  <h3>GIONEE A1</h3>
  <button class="produse buton1">Click pentru detalii</button>
</div>

<div class="w3-quarter">
  <img src="images/produse.jpg" alt="smartphone a1" style="width:45%" class="w3-hover-opacity">
  <h3>GIONEE A1</h3>
  <button class="produse buton1">Click pentru detalii</button>
</div>

<div class="w3-quarter">
  <img src="images/produse.jpg" alt="smartphone a1" style="width:45%" class="w3-hover-opacity">
  <h3>GIONEE A1</h3>
  <button class="produse buton1">Click pentru detalii</button>
</div>

</div>
</div>


<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
<h2>Gionee: Despre companie</h2>
<div style="float:left;">

</div>
<div style="float:left;">
<img src="images/logo.ico"/>
</div>
<div class = "companie">
<p>&nbsp;&nbsp; Gionee Communication Equipment Co Ltd. a fost fondată în septembrie 2002 de către Liu Lirong. Este o întreprindere de înaltă tehnologie care se concentrează pe cercetare și dezvoltare, producția și vânzarea de dispozitive mobile celulare. În 2005, Gionee a obținut licența de producție pentru telefonul mobil GSM și CDMA.</p>

<p>&nbsp;&nbsp; Sediul Gionee are în prezent peste 1500 de persoane cu o vârstă medie de mai puțin de 30 de ani. Echipa noastră de conducere susține un model științific și standardizat de management al întreprinderii, cu un înalt nivel de inovare. Urmărirea constantă a profesionalismului și inovării reprezintă fundamentul dezvoltării durabile la Gionee.</p>

<p>&nbsp;&nbsp; Centrele de cercetare și dezvoltare sunt înființate în Shenzhen, Shanghai și Hangzhou printre alte locuri. În 2006, prima fază a proiectului a avut o investiție totală de peste 1 miliard de RMB, acoperind o suprafață de 500 de acri în Parcul Industrial Gionee. Capacitatea de producție este de 40 milioane de unități pe an. Odată ce întregul parc industrial va fi finalizat și pus în producție, capacitatea de producție va ajunge la 80 de milioane de unități pe an, ceea ce va face Gionee Industrial Park cel mai mare site de producție de telefoane mobile din China.</p>

<p>&nbsp;&nbsp; În plus, Gionee are 41 de agenți de vânzări provinciale generale și 40 de centre provinciale de servicii cu peste 500 de puncte de vânzare francizate. În 2007, am primit titlul de onoare "provincia Guangdong Famous Trademark". În 2011, Gionee a obținut o cotă de piață totală de 7,2%, iar cota de piață GSM de 11,2%. Aceste premii au pus Gionee pe locul al treilea pe piața celulară globală și, în primul rând, pe piața internă.</p>
</div>
</div>




<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>Ultimele stiri</h2>
    <p>Noutati despre ultimele produse, update de soft si aparitii in media a firmei.</p><br>


<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="images/news.jpg" alt="Vernazza" style="width:25%">
  <div class="w3-container">
  <h3>Anduranta A1 de pana la 120 ore</h3>
  <p>Vesti bune! A1 Plus va primi update la Android 6.0.1.</p>
  <p>Incepand cu data de 25 noiembrie 2017 verifica telefonul pentru noul update la Android 6.0.1</p>
  <br>
  <button class="produse buton1">Afiseaza mai mult</button>
      </br>
	  <br>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="images/news.jpg" alt="Cinque Terre" style="width:25%">
  <div class="w3-container">
  <h3>Update la Android 6.0</h3>
  <p>Vesti bune! A1 Plus va primi update la Android 6.0.1.</p>
  <p>Incepand cu data de 25 noiembrie 2017 verifica telefonul pentru noul update la Android 6.0.1</p>
    <br>
  <button class="produse buton1">Afiseaza mai mult</button>
      </br>
	  <br>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="images/news.jpg" alt="Monterosso" style="width:25%">
  <div class="w3-container">
  <h3>Gionee in Romania</h3>
  <p>Vesti bune! A1 Plus va primi update la Android 6.0.1.</p>
  <p>Incepand cu data de 25 noiembrie 2017 verifica telefonul pentru noul update la Android 6.0.1</p>
  <br>
  <button class="produse buton1">Afiseaza mai mult</button>
      </br>
	  <br>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="images/news.jpg" alt="Monterosso" style="width:25%">
  <div class="w3-container">
  <h3>Noul telefon Y6</h3>
  <p>Vesti bune! A1 Plus va primi update la Android 6.0.1.</p>
  <p>Incepand cu data de 25 noiembrie 2017 verifica telefonul pentru noul update la Android 6.0.1</p>
    <br>
  <button class="produse buton1">Afiseaza mai mult</button>
      </br>
	  <br>
  </div>
  </div>
</div>

</div>


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contacteaza-ne</span></div>
      <h3>Adresa</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Otelarilor Nr.14, Galati, Romania</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  0746789753</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  contact@gionee.com</p>
    </div>
    <div class="w3-col m7">
        <br>
        <br>
  <p>Mesajul dumneavoastra a fost trimis! Va multumim.</p>
    </div>
  </div>
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Ne gasiti si pe</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Facut de <a href="http://youtube.com/snukmusic" target="_blank" class="w3-hover-text-green">Snuk</a></p>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>



<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>