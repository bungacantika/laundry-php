<?php
if($_POST){
$nama_member=$_POST['nama_member'];
$alamat=$_POST['alamat'];
$jk= $_POST['jk'];
$telp=$_POST['telp'];

if(empty($nama_member)){
echo "<script>alert('data pelanggan belum lengkap');location.href='reg_pelanggan.php';</script>";
} elseif(empty($alamat)){
echo "<script>alert('data pelanggan belum lengkap');location.href='reg_pelanggan.php';</script>";
} elseif(empty($jk)){
echo "<script>alert('data pelanggan belum lengkap');location.href='reg_pelanggan.php';</script>";
} elseif(empty($telp)){
echo "<script>alert('data pelanggan belum lengkap');location.href='reg_pelanggan.php';</script>";
} else {
include "index.php";
$insert=mysqli_query($conn,"insert into member
(nama_member, alamat, jk, telp)
value ('".$nama_member."','".$alamat."','".$jk."','".$telp."')") or
die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan pelanggan');location.href='pelanggan.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan pelanggan');location.href='pelanggan.php';</script>";
}
}
}
?>