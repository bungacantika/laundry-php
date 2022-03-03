<?php
include "header.php"
?>
<body>
<div class="card card-body">
  <h3>Data Pelanggan | <a href="reg_pelanggan.php" class="btn btn-primary">+Pelanggan</a></h3> 
  <table class="table table-hover table-striped bg-white">
    <thead>
	<tr>
		 <th>NO.</th><th>NAMA</th><th>ALAMAT</th>
		 <th>JENIS KELAMIN</th><th>NO.TELP</th><th>AKSI</th>
		 </tr>
        </thead>
        <tbody>
		<?php
		 include "index.php";
		$qry_member=mysqli_query($conn,"select * from member");
		 $no=0;
		 while($data_member=mysqli_fetch_array($qry_member)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_member['nama_member']?></td>
		<td><?=$data_member['alamat']?></td>
        <td><?=$data_member['jk']?></td>
        <td><?=$data_member['telp']?></td>

		<td><a href="edit_pelanggan.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Edit</a> | <a 
		href="hapus_pelanggan.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
		</tr>

  <?php
		 }
  ?>
        </tbody>
    </table>
    
<?php
include("footer.php");
 ?>


