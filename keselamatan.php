<?php
session_start();
//mulakan sesi log in
if(!isset($_SESSION['UserId'])){
//jika belum log in, lencongkan ke fail ni
header('Location: Index2.php');
exit(); }
?>