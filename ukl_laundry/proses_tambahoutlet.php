<?php
if($_POST){
$nama_outlet=$_POST['nama_outlet'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];

if(empty($nama_outlet)){
echo "<script>alert('nama outlet siswa tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} elseif(empty($alamat)){
echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} elseif(empty($telp)){
echo "<script>alert('no telp tidak boleh kosong');location.href='tambah_outlet.php';</script>";
} else {
include "index.php";
$insert=mysqli_query($conn,"insert into outlet
(nama_outlet, alamat, telp)
value ('".$nama_outlet."','".$alamat."','".$telp."')") or
die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan outlet');location.href='outlet.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan outlet');location.href='outlet.php';</script>";
}
}
}
?>