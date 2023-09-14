<?php
require 'sambung.php';
require 'keselamatan.php';
$UserId=$_SESSION['UserId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #56CFE1;
    color: #fff;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>ECCOQUIZ</h1>
  <p>We Provide Quiz And Test For Student </p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand"  img src="assets/LOGO2.png">eccoquiz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="pilihan_topik.php">QUIZ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="skor_individu.php">ACHIVEMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h5>AIM:</h5>
      <p>Engage your class with fun, standards-tagged quizzes. Get instant data on student mastery. Automatically assign differentiated follow-up activities.</h3>
      <p>LINK.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="pilihan_topik.php">Quiz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="skor_individu.php">Achivement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>WE PROVIDE</h2>
      
      <p>Everything you need for mastery and engagement</p>
      <p>Save your teachers hundreds of hours on lesson planning and grading.</p>
      <p>Make remote learning much more simpler.</p>   
      <p>Plan ahead and re-open quiz anytime anywhere.</p>  
      <p>each student a different set of questions that automatically generates adaptive retakes</p>
    </div>



</body>
</html>
