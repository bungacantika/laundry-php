<?php
include "header.php";
?>
<html>
	<body>
	<div class="card card-body">
    <h3>Paket Cucian | <a href="tambah_paketcuci.php" class="btn btn-primary">+Paket Cucian</a></h3> 
    <table class="table table-hover table-striped bg-white">
  		 <thead>
		 <tr>
		 <th>NO</th><th>JENIS</th><th>HARGA</th><th>AKSI</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "index.php";
		 $qry_paket=mysqli_query($conn,"select * from paket");
		 $no=0;
		 while($data_paket=mysqli_fetch_array($qry_paket)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_paket['jenis']?></td>
        <td><?=$data_paket['harga']?></td>


        <td><a href="edit_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Edit</a> | <a 
		href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>
         <br>
		 <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	</body>
</html>
<?php
include "footer.php";
?>