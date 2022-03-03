<?php
if($_GET['id_member']){
include "index.php";
$qry_hapus=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");
if($qry_hapus){
echo "<script>alert('Sukses hapus data pelanggan');location.href='pelanggan.php';</script>";
} else {
echo "<script>alert('Gagal hapus data pelanggan');location.href='pelanggan.php';</script>";
}
}
?>