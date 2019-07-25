<?php 
include "koneksi.php";

$location = 'location.href="index.php"';

if($_POST['action']=='Tambah') 
		 {  $id_barang		= strtoupper($_POST['id_input']);
			$nama_barang    = strtoupper($_POST['nama_barang']);
			$qty_barang     = $_POST['qty_barang'];
			$harga_barang   = $_POST['harga_barang'];
			$tanggal   		= $_POST['tanggal'];


			$sql = "INSERT INTO data_barang(id_barang, nama_barang, qty_barang, harga_barang, tgl_add)
					VALUES ('$id_barang','$nama_barang','$qty_barang', '$harga_barang','$tanggal')";

			if ($koneksi->query($sql)===TRUE)
				{ echo '<script>';
				  echo 'alert("Data berhasil ditambahkan");'.$location;
			      echo '</script>'; }
			else
				{ echo '<script>';
			      echo 'alert("Data gagal ditambahkan");'.$location;
			      echo '</script>'; }
		 }

else if(isset($_POST['id_barang']))
	{ $id_barang = $_POST['id_barang'];

	    if ($_POST['action']=='Hapus') 
		   { $sql = " DELETE FROM data_barang WHERE id_barang = '$id_barang'";
		     if ($koneksi->query($sql)===TRUE)
				{ echo '<script>';
				  echo 'alert("Data berhasil dihapus");'.$location;
			      echo '</script>'; }
			 else
				{ echo '<script>';
			      echo 'alert("Data gagal dihapus");'.$location;
			      echo '</script>'; }
		   }

		 else
		 {  $id_barang		= $_POST['id_barang'];
			$nama_barang    = strtoupper($_POST['nama_barang']);
			$qty_barang     = $_POST['qty_barang'];
			$harga_barang   = $_POST['harga_barang'];
			$tanggal   		= $_POST['tanggal'];

			 $sql = "UPDATE data_barang
						  SET nama_barang 	= '$nama_barang',
						  	  qty_barang 	= '$qty_barang',
						  	  harga_barang 	= '$harga_barang',
						  	  tgl_add 		= '$tanggal'
						  WHERE id_barang = '$id_barang'";

			if ($koneksi->query($sql)===TRUE)
				{ echo '<script>';
				  echo 'alert("Data berhasil diubah");'.$location;
			      echo '</script>'; }
			else
				{

				  mysqli_query($koneksi, $sql);
				  echo '<script>';
			      echo 'alert("Data gagal diubah");'.$location;
			      echo '</script>'; }
		  
		 }
 	}


$koneksi->close();

 ?>