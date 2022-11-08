<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();

	if ($_SESSION['status_login2']) {
		header('location: ../petugas/dashboard_admin.php');
	}elseif ($_SESSION['status_login1']) {
		header('location: ../Punya_Petugas/dashboard_petugas.php');
	}elseif ($_SESSION['status_login']) {
		header('location: ../../siswa/dashboard_siswa.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body style="background-color:#191c24;">
	<div style="background-color:#191c24;"class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="proses_login.php"  method="post">
					<label for="chk" aria-hidden="true">Siswa</label>
					<input type="text" name="nama" placeholder="Nama">
					<input type="password" name="nisn" placeholder="Password">
					<button>Login</button>
				</form>
			</div>

			<div class="login">
				<form action="proses_login.php"  method="post">
					<label style="color:#191c24;" for="chk" aria-hidden="true">Petugas</label>
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>