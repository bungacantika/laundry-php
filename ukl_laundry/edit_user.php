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
<?php
include "index.php";
$qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");
$data_user=mysqli_fetch_array($qry_get_user);
?>
<h4>Edit User</h4>
<form action="update_user.php" method="post">
<input type="hidden" name="id_user" value="<?=$data_user['id_user']?>">
Nama :
<input type="text" name="nama_user" value="<?=$data_user['nama_user']?>" class="form-control">
Username :
<input type="text" name="username" value="<?=$data_user['username']?>" class="form-control">
Password :
<input type="password" name="password" value="" class="form-control">
Role :
<select name="role" class="form-control">
<option></option>
<option value="admin">Admin</option>
<option value="kasir">Kasir</option>
<option value="owner">Owner</option>
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
   include "footer.php"
?>
