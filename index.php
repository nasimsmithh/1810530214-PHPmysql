<?php 	
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa")



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Mahasiswa</title>
  </head>
  <body>
    <div class="container">	
    	<a href="create.php" class="btn btn-primary">Tambah Data</a>
    	<br><br>
    		<table cellspacing="0" cellpadding="10" class="table align-middle table-bordered">
    				<tr>
    					<th>No.</th>
    					<th>NIM</th>
    					<th>Nama</th>
    					<th>Prodi</th>
    					<th>Aksi</th>	
    				</tr>	

    				<?php $i =1; ?>
    				<?php 	foreach($mahasiswa as $row) :?>
    				<tr>
    					<td><?= $i; ?></td>
    					<td><?= $row["nim"]; ?></td>
    					<td><?= $row["nama_mahasiswa"]; ?></td>
    					<td><?= $row["prodi"]; ?></td>
    					<td>	
    						<a href="delete.php?nim=<?= $row["nim"]; ?>" class="btn btn-danger">Hapus</a>
    						<a href="" class="btn btn-warning">Ubah</a>
    					</td>	
    				</tr>
    				<?php 	$i++; ?>
    				<?php 	endforeach; ?>
    		</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>