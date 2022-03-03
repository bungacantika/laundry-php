<?php
   include "header.php"
?>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
<?php
include "index.php";
$qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
$data_paket=mysqli_fetch_array($qry_get_paket);
?>
<h4>Edit Paket</h4>
<form action="update_paket.php" method="post">
<input type="hidden" name="id_paket" value="<?=$data_paket['id_paket']?>">
Jenis :
<input type="text" name="jenis" value="<?=$data_paket['jenis']?>" class="form-control">
Harga :
<input type="number" name="harga" value="<?=$data_paket['harga']?>" class="form-control">

<input type="submit" name="simpan" value="Simpan"class="btn btn-primary">

</form>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>
<?php
   include "footer.php"
?>
