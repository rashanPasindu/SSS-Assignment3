<?php
 require_once "config.php";

 if (isset($_SESSION['access_token'])){
 header("Location: index1.php");
 exit();
 }
 
 $redirectURl = "https://localhost/SSS/Assignment%203/callback.php";
 $permissions = ['email'];
 $loginURL = $helper -> getLoginUrl($redirectURl, $permissions);
 //echo $loginURL;
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
  <div class="col-md-6 col-offset-3" align="center">
   <form>
   <input class="form-control" placeholder="Email.."></br>
   <input class="form-control" placeholder="Password.."></br>
   <input type="submit" value="Log In" class="btn btn-primary">
   <input type="button" onlclick="window.location.href='<?php echo $loginURL; ?>'" class="btn btn-primary" value="Log In with Facebook"></br>
   </form>

</body>
</html>