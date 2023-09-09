<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> Add post</a>   
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All post</a>
       </li>
    </div>
  </div>
</nav>
<div class="card col-lg-4 mx-auto mt-3">
<div class="crad-header mx-auto">
 Enter Add post
</div>
<div class="crad-body">
<form action="./controller/steorpost.php" method="$_POST"> 
<input  name="title" class="form-control my-3 "  type="text" placeholder="Enter your post title">
<span class="text-danger"> <?=   $_SESSION['you_errors'] ['title_error']?></span>
<textarea name="detail"  class="form-control my-3" placeholder="Enter your detail"></textarea>
<span class="text-danger"> <?=   $_SESSION['you_errors']  ['detail_errors']?></span>
<input  name="author" class="form-control my-3" type="text" placeholder="Enter your post name">
<button class="btn btn-info">subimt your post </button>
</form>
</div>
</div>

</body>
</html>

<?php

session_unset();
?>