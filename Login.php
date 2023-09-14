<?php
//fail wajib
require 'sambung.php';
if (isset($_POST['UserId'])) {
$name = $_POST['name'];
$UserId = $_POST['UserId'];
$Password = $_POST['Password'];

//TAMBAH REKOD
$daftar= "INSERT INTO pengguna (name, UserId, Password,Category)
VALUES ('$name','$UserId','$Password','TEACHER')";
//LAKSANA SQL
$hasil = mysqli_query($hubung, $daftar);
//MESEJ POP UP
if ($hasil) {
echo "<script>alert('Pendaftaran berjaya');
window.location='Index2.php'</script>";
}else{
echo "<script>alert('Pendaftaran gagal');
window.location='Login.php'</script>";
}
}
?>


<html>
    <head>
        <title> Login And Sign Up </title>
        <link rel="stylesheet" href="StyleLogin.css">
</head>
<body>
    <div class ="hero">
        <div class = "form-box">
            <div class = "button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()" >Log In</button>
                <button type="button" class="toggle-btn" onclick="register()" >Register</button>
</div>

<form action="proseslogin.php" method="post" id="login" class="input-group">

<input class="input-field" onblur="checklength(this)" type="text" name="UserId" placeholder="User Id - (12 Number)" maxlength="12" size="25" 
onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required autofocus />


<input  class="input-field" placeholder="Enter Password - (4 Number)" type="Password" name="Password"  maxlength='4'size="10"
onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required>
<script>
function checkLength(el) {
if (el.value.length != 12) {
alert("Nombor KP mesti 12 digit")
}
}
</script>


<input type="checkbox" class="chech-box"><span>Remember Password</span>
<button type="submit" class="submit-btn" >Log In </button>

</form>

<form method="POST" form id="register" class="input-group">

<input type="text"  class="input-field" name="name" placeholder="Full Name According To IC" require>

<input type="text" class="input-field" maxlength='12' name="UserId"
onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="UserId" require>

<input type="Password" class="input-field" name="Password"  id="Password" placeholder="Enter Password(4 Digit)"
maxlength='4' onkeypress='return event.charCode >= 48 && event.charCode <= 57' require>

<input type="checkbox" class="chech-box"><span>I agree to Terms & Conditions</span>
<button type="submit" class="submit-btn">Register</button>
</form>


</div>
</div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }


</script>


</body>
</html>