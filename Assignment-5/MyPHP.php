<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>National Workshop on Web Technologies</title>
	<link rel="stylesheet" href="styles5.css">
	<link  rel="stylesheet"> 
</head>
<body>
	
	<h1>Regitration For National Workshop on Web Technologies</h1>
	<section>
		<nav>

			<ul>
				<li><a href="description.html" target="reg">Description</a></li>
				<li><a href="form.html" target="reg">Regitration Form</a></li>
				<li><a href="time.html" target="reg">Timing and Venu</a></li>
			</ul>
		</nav>
		<article>
			<iframe name="reg" id="reg" width="100%" height="100%" src="file:///Users/apple/Desktop/Assignment-5/form.html" src="file:///Users/apple/Desktop/Assignment-5/description.html" src="file:///Users/apple/Desktop/Assignment-5/time.html"></iframe>
		</article>

	</section>
	<footer>
		<p>U. & P.U. Patel Department Of Computer Engineering</p>
	</footer>
	
</body>

</html>
<?php

$con = mysqli_connect("localhost","root","","assig5");
if(!$con){
echo "Connection Failed";
}
if(isset($_POST['btn'])){

$name=$email=$phone=$gender=$fprof='';

$fname = $_POST['fullName'];
$femail = $_POST['email'];
$fmob = $_POST['mobileNo'];
$fgender = $_POST['gender'];
$fprof = $_POST['profession'];

$sql = "INSERT INTO tbl (fullName,email,mobileNo,gender,profession) VALUES ('$fname','$femail','$fmob','$fgender','$fprof')";
$result = mysqli_query($con,$sql);
header("Refresh:1");
if($result){
		echo "<script>alert(\"Registration is completed...\");</script>";	
}
else{
		echo "<script>alert(\"Sorry Try Again\");</script>";
}

}


?>
