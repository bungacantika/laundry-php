<?php
if($_GET['id']){
include "index.php";

$qry_hapus=mysqli_query($conn,"delete from detil_transaksi  where id_transaksi='".$_GET['id']."'");
if($qry_hapus){
    $qry_hapus=mysqli_query($conn,"delete from transaksi  where id_transaksi='".$_GET['id']."'");
    if($qry_hapus){ 
echo "<script>alert('Sukses hapus transaksi');location.href='transaksi.php';</script>"; }
} else {
echo "<script>alert('Gagal hapus transaksi');location.href='transaksi.php';</script>";
}
}
?>