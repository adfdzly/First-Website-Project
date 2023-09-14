<?php
//WAJIB FAIL INI
require 'sambung.php';
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
<h2>SENARAI TOPIK SUBJEK: <?php echo $subjek; ?></h2>
</center>

<center><div class="row"></center>
			<div class="col-8 col-m-16 col-sm-14">
				<div class="card">
					<div class="card-header">
						<h3>
							Table
						</h3>

						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Topic</th>
									<th>Question Management</th>
									<th>Topic Management</th>
								</tr>
                                <?php
$no=1;
$data1=mysqli_query($hubung,"SELECT * FROM topik");
while ($info1=mysqli_fetch_array($data1))
{
?>
							</thead>
							<tbody>
								<tr>
								<td><?php echo $no; ?></td>
<td><?php echo $info1['topik']; ?></td>
									<td>
                                    <a href="tambah_soalan.php?idtopik=<?php echo $info1['idtopik'];?>"><button>ADD</button></a>
                                    <a href="papar_soalan.php?idtopik= <?php echo $info1['idtopik'];?>"><button>SHOW </button></a></td>
									<td>
									<a href="edit_topik.php?idtopik= <?php echo $info1['idtopik'];?>"><button>EDIT </button></a> 
                                    <a href="hapus_topik.php?idtopik= <?php echo $info1['idtopik'];?>"><button>DELETE</button></a>
</td>
									</td>
								</tr>
								<?php $no++; } ?>
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
<br>
<center><td colspan="4" valign="middle" align="right"><b>
<a href="tambah_topik.php"><button>Tambah Topik Baru
</button></a></b></td></center>
</br>

            <br><center><font style='font-size:14px'>
* Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font></center>




	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->

</body>
</html>