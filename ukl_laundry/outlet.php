<?php
include "header.php";
?>
<html>
	<body>
    <div class="card card-body">
    <h3>List Outlet | <a href="tambah_outlet.php" class="btn btn-primary">+Outlet</a></h3> 
    <table class="table table-hover table-striped bg-white">
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA OUTLET</th><th>ALAMAT</th><th>TELP</th><th>AKSI</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "index.php";
		$qry_outlet=mysqli_query($conn,"select * from outlet");
		 $no=0;
		 while($data_outlet=mysqli_fetch_array($qry_outlet)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_outlet['nama_outlet']?></td>
        <td><?=$data_outlet['alamat']?></td>
        <td><?=$data_outlet['telp']?></td>


        <td><a href="edit_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" class="btn btn-success">Edit</a> | <a 
		href="hapus_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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