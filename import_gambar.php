<?php
require('sambung.php'); //sambung ke p.data 
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

move_uploaded_file($_FILES["image"]["tmp_name"],"gambar/". $_FILES["image"] 
["name"]);
    
     $idsoalan=$_POST['idsoalan'];
	 $nom_soalan=$_POST['nom_soalan'];
	 $soalan=$_POST['soalan'];
     $gambarajah="gambar/" . $_FILES["image"]["name"]; 
	 $idtopik=$_POST['idtopik'];
	 
	 
   

$save=mysqli_query($sambung, "INSERT INTO soalan (idsoalan,nom_soalan,soalan,gambarajah,idtopik,) VALUES 
('$nokereta','$nom_soalan','$soalan','$gambarajah','$idtopik',)");

echo "<script>alert('Tambah rekod baru berjaya'); "
."window.location='soalan_papar.php'</script>";

exit();
}
?>