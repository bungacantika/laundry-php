<?php
include "header.php";
?>
<html>

<body>
<div class="card card-body">
<legend align="center">Tambah Paket Cucian</legend>
<form action="proses_tambahpaketcuci.php" method="post">
Id paket :
<input type="number" name="id_paket" value="" class="form-control">

Jenis  :
<input type="text" name="jenis" value="" class="form-control">

Harga :
<input type="number" name="harga" value="" class="form-control">

<br>
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