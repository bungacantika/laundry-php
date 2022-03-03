<?php
if ($_POST) {
    SESSION_start();
    $id_user = $_POST['id_user'];
    $id_member = $_POST['id_member'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];

    $qty = $_POST['qty'];
    $id_paket = $_POST['id_paket'];
    if (empty($id_member)) {
        echo "<script>alert('Member tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } else {
        include "index.php";
        echo mysqli_error($conn);
        $insert = mysqli_query($conn, "insert into transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) values ('" . $id_member . "','" . $tgl . "','" . $batas_waktu . "','" . $tgl_bayar . "','" . $status . "','" . $dibayar . "'," . $_SESSION['id_user'] . ")") or die(mysqli_error($conn));
        echo mysqli_error($conn);
        $id_transaksi = mysqli_insert_id($conn);
        
        for ($i = 0; $i < count($qty); $i++) {
            $_qty = $qty[$i];
            $_id_paket = $id_paket[$i];

            mysqli_query($conn, "INSERT INTO detil_transaksi (id_transaksi, id_paket, qty) VALUES ('$id_transaksi', '$_id_paket', '$_qty')");
            echo mysqli_error($conn);
        }
        
        if ($insert) {
           echo "<script>alert('Sukses menambahkan transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='transaksi.php';</script>";
        }
    }
}
