<?php
	 include("config.php");
	if(isset($_POST['index'])) {
		$errMsg = '';
		// Get data from FORM
		$utilizator = $_POST['utilizator'];
		$parola = $_POST['parola'];
		if($utilizator == '')
			$errMsg = 'Introduceti numele de utilizator.';
		if($parola == '')
			$errMsg = 'Introduceti parola.';
		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT utilizator, parola FROM id3278032_sql_pie.accounts WHERE utilizator = :utilizator');		
				$stmt->execute(array(
					':utilizator' => $utilizator
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				if($data == false){
					$errMsg = "Utilizatorul $utilizator nu a fost gasit.";
				}
				else {
					if($parola == $data['parola']) {
						$_SESSION['utilizator'] = $data['utilizator'];
						$_SESSION['parola'] = $data['parola'];
						header('Location: dashboard.php');
						exit;
					}
					else
						$errMsg = 'Parola nu este buna.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Gionee - Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon"/>
<style>

body {
margin: 0;
background-color: #f1f1f1;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #0000;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

footer {
background-color: #333;
color: white;
padding: 1px;
}

.submit {
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=text]{
    width:200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('../images/user.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

input[type=password]{
    width:200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('../images/pass.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
</style>
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="../index.php">Gionee -Site</a></li>
</ul>

<div style="padding:10px; margin: auto; width: 60%; position: relative;">
 <?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="margin: 15px">
<h4>*Adminstrator - Login</h4>
				<form action="" method="post">
					<input type="text" name="utilizator" placeholder="Utilizator" value="<?php if(isset($_POST['utilizator'])) echo $_POST['utilizator'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="parola" placeholder="Parola" value="<?php if(isset($_POST['parola'])) echo $_POST['parola'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='index' value="Logheaza-te" class='submit'/><br />
				</form>
			</div>
</div>
<footer class="footer-page">
  <p>Copyright © Snuk 2017-2018</p>
</footer>
</body>
</html>
