<?php
include "header.php";
?>  
<html>
<head>
</head>
<body>
<div class="card card-body">
<?php
include "index.php";
$qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id']."'");
$data_transaksi=mysqli_fetch_array($qry_get_transaksi);
?>
<h4>Edit Transaksi</h4>
<form action="update_transaksi.php" method="post">
<input type="hidden" name="id_transaksi" value="<?=$data_transaksi['id_transaksi']?>">

Tanggal bayar:
<input type="date" name="tgl_bayar" value="<?=$data_transaksi['tgl_bayar']?>" class="form-control">

Status:
<select name="status" class="form-control">
<option></option>
<option value="baru">Baru</option>
<option value="proses">Proses</option>
<option value="selesai">Selesai</option>
<option value="diambil">Diambil</option>
</select>

Dibayar:
<select name="dibayar" class="form-control">
<option></option>
<option value="dibayar">Dibayar</option>
<option value="belum_dibayar">Belum dibayar</option>
</select>



<input type="submit" name="simpan" value="Simpan"class="btn btn-primary">

</form>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>
<?php
include "footer.php";
?>
