<?php
//WAJIB FAIL INI
require 'sambung.php';

//Dapatkan ID dari URL
$soalan_terpilih = $_GET['idsoalan'];

//Hapus rekod soalan + pilihan
$hapusSoalan = mysqli_query($hubung,"
DELETE soalan, pilihan
FROM soalan
INNER JOIN pilihan
ON soalan.idsoalan = pilihan.idsoalan
WHERE soalan.idsoalan='$soalan_terpilih'");

//Papar mesej jika berjaya hapus
echo "<script>alert('Succesfully Deleted');
window.location='Show_topic.php'</script>";

?>