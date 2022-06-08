<?php 
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * from product") or die(mysqli_error($koneksi));
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data Product</title>
</head>
<body>
<a href="tambah_product.php"><button>Tambah</button></a>
<table border="1">
	<tr>
	<td>Id Produk</td>
	<td>Jenis Produk</td>
	</tr>
	<<?php 
	while ($data = mysqli_fetch_array($sql)){

	 ?>
     <tr>
	<td><?php echo $data ['idproduct'];?></td>
	<td><?php echo $data ['jenisproduct'];?></td>
	
	</tr>

	 <<?php

	      }
	  ?>
	 
</table>

</body>
</html>
