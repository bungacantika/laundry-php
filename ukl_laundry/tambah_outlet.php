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
<div class="card card-body">
<legend align="center">Tambah Outlet</legend>
<form action="proses_tambahoutlet.php" method="post">
Nama outlet :
<input type="text" name="nama_outlet" value="" class="form-control">


Alamat :
<input type="text" name="alamat" value="" class="form-control">

Telp :
<input type="number" name="telp" value="" class="form-control">

&emsp;
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <input type="submit" value="Simpan" class="btn btn-outline-primary">
              <input type="reset" value="Batal">
          </div>
</form>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>
<?php
include "footer.php";
?>