<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>


    <?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'registration');
  
 $q = "select * from users where email = 'amansharma57269@gmail.com'";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css"><link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Suez+One&display=swap" rel="stylesheet">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:white;
  box-shadow: 0px 0px 3px 1px;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-top: 40px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: white;
  margin-top: -10px;
  margin-left: 30px;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
	.topnav{
		background-color: white;
		color: black
	}
	.topnav a{
		color: black;
	}
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.profile{
  width: 350px;
  height: 500px;
  background-color:white;
  border-radius: 5px;
  color: black;
  float: left;
  margin-left: 40%;
  margin-top: 40px;
  font-family: 'Odibee Sans', cursive;
   background-color:#212121;

}
.userprofile {
  text-align:center;
  border-bottom: solid white 1px;
  padding: 10px;
}
.userprofile i {
  font-size: 60px;
  margin-bottom: 50px;
  
}
.username p{
   margin-top: 15px;
   color: white;
  }
.username{
  width: 100%;
  height: 70px;
  font-family: 'Suez One', serif;
  margin-top: 30px;
  margin-left: 10px;
  color:white;

}
.username i{
  margin-right: 30px;
  float: right;
  cursor: pointer;
}
.logout a{
  width: 150px;
  text-align:center;
  text-decoration: none;
 padding: 10px;
 color: black;
  background-color: white;
  margin-left: 27%;
  margin-top: 100px;
  float: left;
  border-radius: 5px;

}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a class="active"><img src="logo.png"></a>
  <a  href="#home">Home</a>
  <a href="#news">About us</a>
  <a href="#contact">Software Services</a>
  <a href="#about">Training Services</a>
  <a href="#about">Cources</a>
  <a href="#about">Event</a>
  <a href="#about">Contact Us </a>
  <a href="#about">Pay Now</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
 
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="profile">
  <div class="userprofile"><img src="user.webp" width="100px"></img></div>
 
   <?php  if (isset($_SESSION['username'])) : ?>
      <div class="username"><p>Username</p><?php echo $_SESSION['username']; ?></strong><i class="fa fa-edit"></i></div>
      <div class="username"><p>Email</p><?php echo $res['email']; ?><i class="fa fa-edit"></i></div>
    <?php endif ?>
 
  


<?php  if (isset($_SESSION['username'])) : ?>
      <div class="logout"> <a href="index.php?logout='1'" >logout</a></div>
    <?php endif ?>
</div>
<?php } ?>

</body>
</html>