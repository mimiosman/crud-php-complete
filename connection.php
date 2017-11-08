<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root")
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test2",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

 /* local */

// $databaseHost = 'localhost';
// $databaseName = 'sql12203614';
// $databaseUsername = 'root';
// $databasePassword = '';

/* remote */

$databaseHost = 'sql12.freemysqlhosting.net';
$databaseName = 'sql12203614';
$databaseUsername = 'sql12203614';
$databasePassword = 'qHsHKQXvx5';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
