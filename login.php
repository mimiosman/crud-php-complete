<?php session_start(); ?>
<html>
<head>
	<title>Log Masuk</title>
</head>

<body>
<a href="index.php">Halaman Utama</a> <br />
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Sila isi katanama dan katalaluan.";
		echo "<br/>";
		echo "<a href='login.php'>Kembali</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");

		$row = mysqli_fetch_assoc($result);

		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Katanama dan katalaluan tidak sah.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');
		}
	}
} else {
?>
	<p><font size="+2">Log Masuk</font></p>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr>
				<td width="10%">Katanama</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Katalaluan</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Hantar"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
</body>
</html>
