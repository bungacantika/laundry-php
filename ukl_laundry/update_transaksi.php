<?php
include 'index.php';
$id_transaksi=$_POST['id_transaksi'];
$tgl_bayar=$_POST['tgl_bayar'];
$status=$_POST['status'];
$dibayar=$_POST['dibayar'];

$query="UPDATE transaksi SET tgl_bayar='$tgl_bayar',status='$status',dibayar='$dibayar' where id_transaksi='$id_transaksi'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit transaksi');location.href='transaksi.php';</script>";
    } else {
    echo "<script>alert('Gagal edit transaksi');location.href='transaksi.php';</script>";
    }
?>