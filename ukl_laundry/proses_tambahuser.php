<?php
if($_POST){
$nama_user=$_POST['nama_user'];
$username=$_POST['username'];
$password= md5($_POST['password']);
$role=$_POST['role'];

if(empty($nama_user)){
echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_user.php';</script>";
} elseif(empty($role)){
echo "<script>alert('role tidak boleh kosong');location.href='tambah_user.php';</script>";
} elseif(empty($username)){
echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
} elseif(empty($password)){
echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
} else {
include "index.php";
$insert=mysqli_query($conn,"insert into user
(nama_user, role, username, password)
value ('".$nama_user."','".$role."','".$username."','".$password."')") or
die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan user');location.href='tampil_user.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan user');location.href='tampil_user.php';</script>";
}
}
}
?>