<?php
include "header.php";
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title></title>
</head>
<body>
<h4>Tambah Detil Transaksi</h4>



ID transaksi:
<select name="id_transaksi" class="form-control">
<?php
    include "index.php";
    $qry_transaksi=mysqli_query($conn,"select * from transaksi");
    while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
        echo "<option value='".$data_transaksi['id_transaksi']."'>".$data_transaksi['id_transaksi']."</option>";
    }
?>
</select>

Jenis paket:
<select name="id_paket" class="form-control">
<?php
    include "index.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    while($data_paket=mysqli_fetch_array($qry_paket)){
        echo "<option value='".$data_paket['id_paket']."'>".$data_paket['jenis']."</option>";
    }
?>
</select>

Jumlah :
<input type="number" name="qty" value="" class="form-control">

Total Bayar
                <input type="text" name="total" class="form-control mb-2"
                value="<?=$transaksi["total"];?>" readonly>


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