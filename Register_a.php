<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
	echo "Email Id Already Exists";
	exit;
}
elseif(isset($_POST['SAVE']))
{
	$file=rand(1000,100000)."-".$_FILES['file']['name'];
	$file_loc=$_FILES['file']['tmp_name'];
	$folder="upload/";
	$new_file_name=strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$query="INSERT INTO Register(firstname, lastname, email, password, pic) VALUES ('$first_name',
		'$last_name','$email','$password','md5($pass)','$final_file')";
		$sql=mysqli_query($conn,$query)or die("could not perform the query");
		header("location: login.php?status=sucess");
	}
	else
	{
		echo "Error.Please try again";
	}	
}
?>