<?php
include "header.php";
?>

<?php
include "index.php";
$qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
$data_member=mysqli_fetch_array($qry_get_member);
?>
<h3>Edit Pelanggan</h3>
<form action="update_pelanggan.php" method="post">
<input type="hidden" name="id_member" value="<?=$data_member['id_member']?>">

Nama :
<input type="text" name="nama_member" value="<?=$data_member['nama_member']?>" class="form-control">

Alamat :
<input type="text" name="alamat" value="<?=$data_member['alamat']?>" class="form-control">

Jenis Kelamin :
<select name="jk" class="form-control">
<option></option>
<option value="laki-laki">laki-laki</option>
<option value="perempuan">perempuan</option>
</select>

No.Telp :
<input type="text" name="telp" value="<?=$data_member['telp']?>" class="form-control">

<input type="submit" name="simpan" value="Simpan"class="btn btn-primary">

</form>

        </div>
    </main>