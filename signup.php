<html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> plan at us </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width,initial-scale=1">
	<meta name="description" content="sanitary pipes,affordable tanks,beutiful tiles,easy tp purchse">




	<!--<script src="boostrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





	<style>
	.jumbotron
	{
	background-color:aqua;
	}
	</style>
	</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
<h1>FOOD ORDERING SYSTEM</h1>
	<p style="font-family:Franklin Gothic Heavy">Get Food At Your Door Step</p>
</div>

	<nav class ="navbar navbar-inverse">
	<div class="container-fluid">
	<div class="navbar-header">

	<ul class="nav navbar-nav">
	<li class="active"><a href="home.php">Home</a></li>
	
	<li><a href="#">About Us</a></li>
	<li class="dropdown">
	<a class ="dropdown-toggle" data-toggle="dropdown" href="#">Menu
	<span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="breakfast.php">BREAKFAST</a></li>
	<li><a href="lunch.php">LUNCH</a></li>
	<li><a href="dinner.php">DINNER</a></li>
	</ul>
	</li>

	<li><a href="signup.php">Customer details</a></li>
	<li><a href="#">Contact us</a></li>
	</ul>
	</div>
	</nav>
	
	
    <div class="container">
	<img src="pic1.png" width="500" height="236"></img>
	<img src="pic2.jpg" width="500" height="236"></img>
	</div>


	<div class="signup-form">
		<form action="register_a.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
        </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html> 