<?php
if($_POST){
$id_paket=$_POST['id_paket'];
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];

if(empty($jenis)){
echo "<script>alert('data tidak boleh kosong');location.href='tambah_paketcuci.php';</script>";
} elseif(empty($harga)){
echo "<script>alert('data tidak boleh kosong');location.href='tambah_paketcuci.php';</script>";
} else {
include "index.php";
$insert=mysqli_query($conn,"insert into paket (id_paket, jenis, harga) value ('".$id_paket."','".$jenis."','".$harga."')") or
die(mysqli_error($conn));

if($insert){
echo "<script>alert('Sukses menambahkan paket cucian');location.href='paket_cucian.php';</script>";

} else {
echo "<script>alert('Gagal menambahkan paket cucian');location.href='paket_cucian.php';</script>";
}
}
}
?>