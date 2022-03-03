<?php
if($_POST){
    
$id_transaksi=$_POST['id_transaksi'];
$id_paket=$_POST['id_paket'];
$qty=$_POST['qty'];


$total = 0;
    for ($i=0; $i < count($paket); $i++) { 
    // select transaksi
        $id_paket = $paket[$i];
        $sql = "select * from paket where id_paket ='$id_paket'";
        $hasil = mysqli_query($connect, $sql);
        $laund = mysqli_fetch_array($hasil);
        $harga = $laund["harga"];
        if ($jenis == 'Kiloan') {
            $harga = 9000;
        } else if($jenis == 'Selimut') {
            $harga = 15000;
        } else if($jenis == 'Bed_cover'){
            $harga = 30000;
        } else if($jenis == 'Kaos'){
            $harga = 8000;
        }
        

        $total += $qty * $harga;
    }

if(empty($id_transaksi)){
echo "<script>alert('id transaksi tidak boleh kosong');location.href='tambah_detiltransaksi.php';</script>";
} elseif(empty($id_paket)){
echo "<script>alert('id paket tidak boleh kosong');location.href='tambah_detiltransaksi.php';</script>";
} else {
include "index.php";
$insert=mysqli_query($conn,"insert into detil_transaksi (id_transaksi, id_paket, qty) value ('".$id_transaksi."','".$id_paket."','".$qty."')");
if($insert){
echo "<script>alert('Sukses menambahkan detil transaksi');location.href='transaksi.php';</script>";
} else {
echo "<script>alert('Gagal menambahkan detil transaksi');location.href='transaksi.php';</script>";
}
}
}
?>