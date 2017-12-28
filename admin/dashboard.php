<?php
	include("config.php");
	if(empty($_SESSION['utilizator']))
		header('Location: index.php');

?>

<!DOCTYPE html>
<html>
<head>
<title>Gionee - Control Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon"/>
<style>
body {margin: 0;}

ul.sidenav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

ul.sidenav li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
 
ul.sidenav li a.active {
    background-color: #000000;
    color: white;
}

ul.sidenav li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

div.content {
    margin-left: 15%;
    padding: 1px 16px;
    height: 1000px;
}

@media screen and (max-width: 900px) {
    ul.sidenav {
        width: 100%;
        height: auto;
        position: relative;
    }
    ul.sidenav li a {
        float: left;
        padding: 15px;
    }
    div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
    ul.sidenav li a {
        text-align: center;
        float: none;
    }
}
</style>
</head>
<body>

<ul class="sidenav">
  <li><a class="active" href="dashboard.php">Acasa</a></li>
  <li><a href="comenzi.php">Comenzi</a></li>
  <li><a href="ticket.php">Ticket</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</ul>

<div class="content">
  <h2>Administrator - Control Panel</h2>
  <p>Bine ai venit, <?php echo $_SESSION['utilizator']; ?>! <br><p>
  <p>Acesta este panoul de control dedicat pentru administrarea clientilor Gionee.</p>
</div>

</body>
</html>
