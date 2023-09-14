<?php
//SETUP PANGKALAN DATA
//TIDAK PERLU UBAH
$host="localhost";
$user="root";
//BIARKAN KOSSONG JIKA GUNA XAMPP
$password="";
//NAMA PANGKALAN DATA
$database="eccoquiz";
//////////////////////
$hubung=mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
echo "Proses sambung ke pangkalan data gagal";
exit();
}
////////////////////////
//PENETAPAN SISTEM ANDA
$lencana="lencanaEC.png";
$subjek="Sains Darjah 6";
$nama_sekolah="MAKTAB SULTAN ABU BAKAR<br>
JALAN SUNGAI CHAT, <br>
80100 JOHOR BAHRU, JOHOR.";
$nama_sistem ="eccoquiz";
$motto_sistem = "Format : Soalan MCQ/TF";
$footer = "eEXAM MSAB";
$logo="lencanaEC.png";
?>