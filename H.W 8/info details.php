<?php
session_start();
include"./database/env.php";
$query = " select * from informations ";
$response = mysqli_query($conn, $query);
$informations = mysqli_fetch_all($response, 1);

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

<!--table-->
<div class="col-lg-6 mx-auto mt-5">
<table class="table">
  <tr>
  <th>#</th>
  <th>email</th>
  <th>password</th>
  </tr>

  <?php
  foreach($informations as $key=>$information){
    ?>
    <tr>
  <td><?= ++$key ?></td>
  <td><?= $information['email'] ?></td>
  <td><?= $information['password'] ?></td>
  </tr>
  <?php
  }
  ?>
  
</table>
</div>

<!--table end-->


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

