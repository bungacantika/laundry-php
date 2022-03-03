<?php
include 'index.php';

$id_member=$_POST['id_member'];
$nama_member=$_POST['nama_member'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$telp=$_POST['telp'];

$query="UPDATE member SET nama_member='$nama_member',alamat='$alamat',jk='$jk',telp='$telp' where id_member='$id_member'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit data pelanggan');location.href='pelanggan.php';</script>";
    } else {
    echo "<script>alert('Gagal edit data pelanggan');location.href='pelanggan.php';</script>";
    }
?>