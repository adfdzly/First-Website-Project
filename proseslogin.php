<?php 
//wajib fail ini
require 'sambung.php';
//perlukan fail ini
//mula sesi

session_start();
if (isset($_POST['UserId'])) {
$userId = $_POST['UserId'];
$Password = $_POST['Password'];
$query = mysqli_query($hubung,
"SELECT * FROM pengguna WHERE UserId='$userId'
AND Password='$Password'");
$row = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) == 0||$row['Password']!=$Password)
{
echo "<script>alert('User Id atau Katalaluan yang salah');
window.location='Login.php'</script>";
}
else
{
$_SESSION['UserId']=$row['UserId'];
$_SESSION['level'] = $row['Category'];

if ($row['Category']=='TEACHER')
{
header("Location: Index1.php");
}
else
{
    header("Location: Index3.php");
}
}
}
?>