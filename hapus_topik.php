<?php
//WAJIB FAIL INI
require 'sambung.php';

//ID dari URL
$topik_terpilih = $_GET['idtopik'];
//LAKSANA DELETE
$result = mysqli_query($hubung,"DELETE FROM topik WHERE idtopik='$topik_terpilih'");
$result1 = mysqli_query($hubung,"DELETE FROM soalan WHERE idtopik='$topik_terpilih'");
$result2 = mysqli_query($hubung,"DELETE FROM pilihan WHERE
idtopik='$topik_terpilih'");
$result2 = mysqli_query($hubung,"DELETE FROM perekodan WHERE idtopik='$topik_terpilih'");
//MESEJ POP UP
echo "<script>alert('Hapus topik berjaya');
window.location='Show_topic.php'</script>";
?>