<?php 
//WAJIB FAIL INI
require 'sambung.php'; 
require 'keselamatan.php';
//PERLUKAN FAIL INI


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





  <center><h2>SENARAI TOPIK</h2></center>
      <main>
<table width="70%" border="0" align="center" style='font-size:16px'>
  <tr>
    <td width="2%"><b>Bil.</b></td>
    <td width="50%"><b>Topik</b></td>
	<td width="10%"><b>Bilangan Soalan</b></td>
	<td width="8%"><b>Tindakan</b></td>
  </tr>
 <?php
  $no=1;
  $data1=mysqli_query($hubung,"SELECT * FROM topik");    
	while ($info1=mysqli_fetch_array($data1))
		{
	$dataSoalan=mysqli_query($hubung, "SELECT COUNT(idtopik) as 'bil' FROM soalan WHERE idtopik='$info1[idtopik]' GROUP BY idtopik");
	$getSoalan=mysqli_fetch_array($dataSoalan);
			
		?>
  <tr>
    <td><?php echo $no; ?></td>
	<td><?php echo $info1['topik']; ?></td>
	<td><?php echo $getSoalan['bil']; ?></td>
    <td>
	<?php
	if($getSoalan['bil']==0){
	}else{
	?>
	<a href="soalan_mula.php?idtopik=
	<?php echo $info1['idtopik'];?>"><button>BUKA</button></a>
	<?php } ?>
	</td>
  </tr>
  <?php $no++; } ?>
</table>
      </main>
    <center>
      <font style='font-size:14px'>
	  * Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font>
    </center>
  </body>
</html>