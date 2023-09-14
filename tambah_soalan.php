<?php
//fail wajib
require 'sambung.php';
?>
<?php
if (isset($_POST['submit'])){
if ($_FILES['gambar']['name']==NULL){
$newnamepic="";
}else{
$gambar=$_FILES['gambar']['name'];
$imageArr=explode('.',$gambar);
$random=rand(10000,99999);
$newnamepic=$imageArr[0].$random.'.'.$imageArr[1];
$uploadPath="gambar/".$newnamepic;
$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);
}

//NILAI YANG DIBUAT POST
$nom_soalan = $_POST['nom_soalan'];
$idtopik = $_POST['idtopik'];
$soalan = $_POST['paparan_soalan'];
$jawapan_betul = $_POST['jawapan_betul'];

$pilihan = array();
$pilihan[1] = $_POST['pilih1'];
$pilihan[2] = $_POST['pilih2'];
$pilihan[3] = $_POST['pilih3'];
$pilihan[4] = $_POST['pilih4'];

//query soalan
$query="INSERT INTO soalan (nom_soalan,soalan,gambarajah,idtopik)
values('$nom_soalan','$soalan','$newnamepic','$idtopik')";
$insert_row=mysqli_query($hubung, $query);
$last_id = mysqli_insert_id($hubung);

//mesej popup
echo "<script>alert('Soalan baru telah berjaya ditambah');
window.location='tambah_soalan.php?idtopik=$idtopik'
</script>";

//Penetapan jawapan betul = 1
if($insert_row){
foreach($pilihan as $pilihan_jawapan => $pilih){
if($pilih != ''){
if($jawapan_betul == $pilihan_jawapan){
$jawapan = 1;
} else {
$jawapan = 0;
}

$query="INSERT INTO pilihan (nom_soalan,jawapan,pilihan_jawapan,idsoalan)
values('$nom_soalan','$jawapan','$pilih','$last_id')";
$insert_row=$hubung->query($query);
}
}
}
}
$topik_pilihan = $_GET['idtopik'];
$_SESSION['topik_semasa'] = $topik_pilihan;

//Dapatkan jumlah soalan
$query = "SELECT * FROM soalan WHERE idtopik='$topik_pilihan'";
$soalan = mysqli_query($hubung,$query);
$total=mysqli_num_rows($soalan);
$next=$total+1;
?>

<html>
<head>
	<title>Eccoquiz Admin</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>

        <!--LOGO-->
			<li class="nav-item">
				<img src="assets/LOGO2.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/LOGO.png" alt="ATPro logo" class="logo logo-dark">
			</li>
		</ul>

		<!-- end nav left -->
		<!-- form -->
		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="What you looking for...">
			<i class="fas fa-search"></i>
		</form>
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">

        <!--Dark and Light Theme-->
			<li class="nav-item mode">
				<a class="nav-item" href="#" onclick="switchTheme()">
                <img src="assets/moon.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/sun.png" alt="ATPro logo" class="logo logo-dark">
				</a>
			</li>

        <!--Profile-->
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="assets/profile.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="Index2.php" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="Index1.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>
						Main Page
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="Admin.php" class="sidebar-nav-link active">
					<div>
						<i class="fab fa-accusoft"></i>
					</div>
					<span>Dashboard</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="Show_topic.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-spinner"></i>
					</div>
					<span>Quiz</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="prestasi_topik.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-check-circle"></i>
					</div>
					<span>Student Achivement</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="senarai_pelajar.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-bug"></i>
					</div>
					<span>Student Lists</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="import_daftar.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Insert Studets</span>
				</a>
			</li>
		</ul>
	</div>
    <div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>100+</h3>
					<p>To do</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>100+</h3>
					<p>In progress</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>100+</h3>
					<p>Completed</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3>100+</h3>
					<p>Issues</p>
				</div>
			</div>
		</div>

<center>
<h2>ADD QUESTIONS</h2></center>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<form method="post" enctype="multipart/form-data">
<p>
<label>Question -</label>
<input type="text" value="<?php echo $next; ?>"
name="nom_soalan" size="5" readonly />
<input type="text" value="<?php echo $topik_pilihan; ?>"
name="idtopik" hidden />
</p>
<p>
<label>Question</label>
<textarea id="paparan_soalan" name="paparan_soalan"
rows="7" cols="105" autofocus required></textarea>
</p>
<p>
<label>Picture<br>
<small style="color:red">*If Require</small></label>
<input type="file" name="gambar"/>
</p>
<p>
<label>Choices 1: </label>
<input type="text" name="pilih1" style="width:450px;"
required />
</p>
<p>
<label>Choices 2: </label>
<input type="text" name="pilih2" style="width:450px;"
required />
</p>
<p>
<label>Choices 3: </label>
<input type="text" name="pilih3" style="width:450px;"/>
</p>
<p>
<label>Choices 4: </label>
<input type="text" name="pilih4" style="width:450px;"/>
</p>
<p>
<label>Choose Answer [1-4] </label>
<input type="text" name="jawapan_betul"
style="width:50px;" required />
</p>
<p>
<input type="submit" name="submit" value="CREATE"/>
<input type="button" value="CANCEL"
onclick="history.back()"/>
</p>
</form>
</td></tr>
</table>
</main>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->

</body>
</html>