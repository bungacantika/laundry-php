<?php
include 'index.php';

$id_paket=$_POST['id_paket'];
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];

$query="UPDATE paket SET jenis='$jenis',harga='$harga' where id_paket='$id_paket'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit data paket cucian');location.href='paket_cucian.php';</script>";
    } else {
    echo "<script>alert('Gagal edit data paket cucian');location.href='paket_cucian.php';</script>";
    }
?>