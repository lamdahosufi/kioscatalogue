<?php  
 
include "koneksi.php";
//get the username  
$id = mysqli_real_escape_string($koneksi, $_POST['id_input']);  
$sql = "SELECT * FROM data_barang WHERE id_barang = '$id' ";
  
//mysql query to select field username if it's equal to the username that we check '  

$result = mysqli_query($koneksi, $sql);  
//if number of rows fields is bigger them 0 that means it's NOT available '  
if(mysqli_num_rows($result)>0)
	{ //and we send 0 to the ajax request  
      echo 0;  
  	}
else
	{ //else if it's not bigger then 0, then it's available '  
      //and we send 1 to the ajax request  
      echo 1;  
	}  
?>