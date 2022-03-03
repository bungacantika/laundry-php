<?php
include "header.php";
?>
<html>
<head>
<title></title>
</head>
<body>
<div class="card card-body">
<legend align="center">Regristasi Pelanggan</legend>
<form action="proses_reg.php" method="post">
        Nama
        <input type="text" name="nama_member" class="form-control">
        
        Alamat
        <input type="text" name="alamat" class="form-control">

        Jenis Kelamin
        <select name="jk" class="form-control">
        <option></option>
        <option value="laki-laki">laki-laki</option>
        <option value="perempuan">perempuan</option>
        </select>

        No. Telp
        <input type="text" name="telp" class="form-control">

        <br>
        &emsp;
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <input type="submit" value="Regristasi" class="btn btn-outline-primary">
              <input type="reset" value="Batal">
          </div>
        </fieldset>
        </form>
        </div>
<?php
include "footer.php";
?>
</body>
</html>