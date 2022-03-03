<?php
include 'index.php';

$id_outlet=$_POST['id_outlet'];
$nama_outlet=$_POST['nama_outlet'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];

$query="UPDATE outlet SET nama_outlet='$nama_outlet',alamat='$alamat', telp='$telp' where id_outlet='$id_outlet'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit data outlet');location.href='outlet.php';</script>";
    } else {
    echo "<script>alert('Gagal edit data outlet');location.href='outlet.php';</script>";
    }
?>