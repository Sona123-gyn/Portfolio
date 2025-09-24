<?php
    $url='localhost';
	$username='root';
	$password='';
	$conn=mysqli_connect($url,$username,$password,"grocery");
	if(!$conn)
	{
		die('could nor connect Mysqli:' .mysql_error()));
	}
?>	