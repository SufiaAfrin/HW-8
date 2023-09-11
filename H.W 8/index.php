<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home work 7</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="./index.php">Log in system</a>
  
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
    <li class= "nav-item">
      <a class= "nav-link active" aria-current= "page" href ="./info details.php">Info details</a>
</li>
    
      </ul>
      
    </div>
  </div>
</nav>



<!-- form start -->
<div class="card col-lg-4 m-auto mt-5">
    <div class="m-auto mt-3">
        Log in to Facebook
    </div>
<div class="card-body">
<form action="./controller/login.php" method ="POST">

<input name="email" 
value="<?= isset($_SESSION['past']['email']) ? $_SESSION['past']['email'] : ''?>"
class="form-control my-2" type = "text" placeholder="Email adress or phone number">
<?php
if(isset($_SESSION['form_errors']['email_error'])){
  ?>
  <span class = "text-danger"> <?= $_SESSION['form_errors']['email_error'] ?></span>
<?php
}
?>

<input name="pass" 
value="<?= isset($_SESSION['past']['pass']) ? $_SESSION['past']['pass'] : '' ?>"
class="form-control my-2" type = "text" placeholder="Password"></br>
<?php
if(isset($_SESSION['form_errors']['pass_error'])){
  ?>
  <span class = "text-danger"> <?= $_SESSION['form_errors']['pass_error'] ?></span>
<?php
}
?>
<button class="form-control btn btn-primary">Log in</button>
</form>
</div>
</div>
<!-- form end -->

<div class ="toast <?= isset($_SESSION['msg']) ? "show" : "" ?>" style="position: absolute; bottom: 50px; right: 50px" role ="alert" aria-live="assertive" aria-atomic="true">
<div class ="toast-header">
  <strong class="me-auto">Log in system</strong>
  <small>1 sec ago</small>
  <button type="button" class ="btn-close" data-bs-dismis="toast" aria-label="Close"></button>
</div>

<div class="toast-body">
<?= Isset($_SESSION['msg']) ? $_SESSION['msg'] : "" ?>
</div>
</div>
</body>
</html>


<?php

session_unset();
?>

