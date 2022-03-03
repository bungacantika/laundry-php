<?php
if($_GET['id_paket']){
include "index.php";
$qry_hapus=mysqli_query($conn,"delete from paket where id_paket='".$_GET['id_paket']."'");
if($qry_hapus){
echo "<script>alert('Sukses hapus data paket cucian');location.href='paket_cucian.php';</script>";
} else {
echo "<script>alert('Gagal hapus data paket cucian');location.href='paket_cucian.php';</script>";
}
}
?>