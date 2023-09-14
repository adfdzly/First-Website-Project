<?php
require 'sambung.php';
require 'keselamatan.php';
$UserId=$_SESSION['UserId'];
?>

<html>
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

<center><h4>REKOD MARKAH YANG DICAPAI</h4></center>
<main><table width="70%" border="0" align="center"
style="font-size:16px">
<tr>
<td width="2%"><b>#.</b></td>
<td width="50%"><b>Topic</b></td>
<td width="10%"><b>Date/Time</b></td>
<td width="3%"><b>Score</b></td>
<td width="5%"><b>Marks</b></td>
</tr>
<?php
$no=1;
$data1=mysqli_query($hubung,"SELECT * FROM perekodan
WHERE UserId='$UserId' ORDER BY catatan_masa DESC limit 0,10");
while ($info1=mysqli_fetch_array($data1))
{

//TABLE TOPIK
$dataTopik=mysqli_query($hubung,"SELECT * FROM topik
WHERE idtopik='$info1[idtopik]'");
$getTopik=mysqli_fetch_array($dataTopik);

//TABLE SOALAN
$dataSoalan=mysqli_query($hubung,"SELECT COUNT(idtopik)
AS 'bil' FROM soalan WHERE idtopik='$info1[idtopik]'");
$getBilSoalan=mysqli_fetch_array($dataSoalan);
//LETAK VALUE PADA VARIABLE
$bilSoalan=$getBilSoalan['bil'];
$markah_Topik=$getTopik['markah'];
?>
<tr style='font-size:14px'>
<td ><?php echo $no; ?></td>
<td><?php echo $getTopik['topik']; ?></td>
<td><?php echo date('d-m-Y g:i A',
strtotime($info1['catatan_masa'])); ?></td>
<td><?php echo $info1['skor']; ?></td>
<td><?php echo number_format(($info1['skor']/
$bilSoalan)*$markah_Topik); ?>%</td>
</tr>

<?php $no++; } ?>
</table>
</main>
<center><font style='font-size:14px'>
* The records displayed are the last 10* <br>Total Record :<?php echo $no-1; ?></font> 
</center>
</body>
</html>