<?php session_start(); ?>
<html>
<head>
	<title>Halaman Utama</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Sistem Pakar Diagnosis Penyakit Sugar Glider
	</div>
	<?php
	if(isset($_SESSION['valid'])) {
		include("connection.php");
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>

		Selamat Datang <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Log Keluar</a><br/>
		<br/>
		<a href='view.php'>Contoh CRUD</a>
		<br/><br/>
	<?php
	} else {
		echo "Sila Log Masuk untuk menggunakan sistem.<br/><br/>";
		echo "<a href='login.php'>Log Masuk</a> | <a href='register.php'>Daftar</a>";
	}
	?>
	<div id="footer">
		Dicipta oleh <a href="https://hafiz-azmi.github.io/portfolio/" target="_blank">Hafiz Azmi</a>
	</div>
</body>
</html>
