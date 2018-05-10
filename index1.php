<?php
session_start();
 if (!isset($_SESSION['access_token'])){
 header(string:'Location: letsGetConnectedLogin.php');
 exit();
 }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>let's get connected</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px">
 <div class="row justify-content-center">
  <div class="col-md-3">
	<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
   </div>

  <div class="col-md-9">
 	<table class="table table-hover table-bordered">
	<tbody>
	 <tr>
	  <td>ID</td>
	  <td><?php echo $_SESSION['userData']['id'] ?></td>
	 </tr>
	 <tr>
	  <td>Name</td>
	  <td><?php echo $_SESSION['userData']['name'] ?></td>
	 </tr>
	 <tr>
	  <td>Email</td>
	  <td><?php echo $_SESSION['userData']['email'] ?></td>
	 </tr>
 </div>
 
</body>
</html>