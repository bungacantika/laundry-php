<?php
include "header.php"
?>
<head></head>
<body>
<div class="card card-body">
  <h3>Transaksi | <a href="tambah_transaksi.php" class="btn btn-primary">+Transaksi</a></h3> 
  <table class="table table-hover table-striped bg-white">
    <thead>
    <tr>
        <th>NO</th><th>PELANGGAN</th><th>TGL</th>
        <th>BATAS WAKTU</th><th>TGL BAYAR</th><th>STATUS</th>
        <th>BAYAR</th><th>JENIS</th><th>QTY</th>
        <th>HARGA</th><th>AKSI</th>

            </tr>

        </thead>
        <tbody>
            <?php
            include "index.php";
            
            $qry_transaksi=mysqli_query($conn,"select t.id_transaksi as id, m.nama_member as nama_member, t.tgl as tgl, batas_waktu, tgl_bayar, status, dibayar from transaksi t, member m where t.id_member = m.id_member");
            echo mysqli_error($conn);
            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detil_transaksi=mysqli_query($conn,"select *, detil_transaksi.qty * paket.harga as total from detil_transaksi, paket where id_transaksi = ".$data_transaksi['id']." AND paket.id_paket = detil_transaksi.id_paket");
                $jumlah_paket = mysqli_num_rows($qry_detil_transaksi);

                $no++;

                $i = 0;
                while($data_detil_transaksi = mysqli_fetch_array($qry_detil_transaksi)) {
                    $i++;
                    if ($i == 1) {
                ?>
                <tr>
                    
                    <td><?=$no?></td>
            
                    <td><?=$data_transaksi['nama_member']?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_detil_transaksi['jenis']?></td>
                    <td><?=$data_detil_transaksi['qty']?></td>
                    <td><?=$data_detil_transaksi['total']?></td>

                   <td><a href="edit_transaksi.php?id=<?=$data_transaksi['id']?>" class="btn btn-success">Edit</a> | <a 
		            href="hapus_transaksi.php?id=<?=$data_transaksi['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

                </tr>
<?php
} else {
?>
                    <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?=$data_detil_transaksi['jenis']?></td>
                    <td><?=$data_detil_transaksi['qty']?></td>
                    <td><?=$data_detil_transaksi['total']?></td>

                    <td>
                    </td>
                </tr>

<?php
    }
    }}
?>

        </tbody>
    </table>

<?php
include("footer.php");
 ?>


