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
$prenume = $_POST["prenume"];
$telefon = $_POST["telefon"];
$mail = $_POST["mail"];
$problema = $_POST["problema"];
$descriere = $_POST["descriere"];

$sql = "INSERT INTO id3278032_sql_pie.Ticket (nume, prenume, telefon, mail, problema, descriere)
VALUES ('$nume', '$prenume', '$telefon', '$mail', '$problema', '$descriere')";
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
    
.accordion {
    background-color: white;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
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


<!-- Image Header -->

<div class="slider w3-display-container w3-animate-opacity">
  <img class="mySlides" src="images/ticket.png" style="width:100%;min-height:350px;max-height:600px;">
    </div>

<!-- Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<div class="w3-row"><br>

<h2>Suport clienti - intrebari frecvente</h2>

<button class="accordion">Cum pot instala alte aplicatii?</button>
<div class="panel">
  <p>Instalarea de noi aplicatii se poate face doar daca extensia aplicatiei este .apk sau se pot instala si din Magazin Play.</p>
</div>

<button class="accordion">Ce fel de cartele suporta telefonul?</button>
<div class="panel">
  <p>Telefonul suporta doar cartele Micro-SIM.</p>
</div>

<button class="accordion">De ce nu merge card-ul SD?</button>
<div class="panel">
  <p>Verificati ca acesta sa fie introdus corect in slot.</p>
</div>

<h2>Suport clienti - trimitere ticket</h2>
 <div class="w3-container w3-padding-32" id="contact">
    <p>Ticketul a fost trimis! In cel mai scurt timp un operator o sa va contacteze!</p>
  </div>

</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>


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
</html>



<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>