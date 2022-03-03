<?php 
require_once 'index.php';
$id_transaksi = $_GET['id'];
$tampilTLaundry = $conn->query("SELECT * FROM transaksi  WHERE id_transaksi = $id_transaksi") 
or die(mysqli_error($conn));
$data = $tampilTLaundry->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body onload="window.print()" style="background: #eee;">
<div class="container">
	<div class="row mt-5">
		<div class="col-md-7 offset-md-3 p-5" style="background: #fff;">
			<table>
	  <tbody>
	  	<tr>
	  		<td><center>OK-Laundry.id</center></td>
	  	</tr>  	
	  	<tr>
	  		<td>Jl. Danau Ranau X G7D/02</td>
	  	</tr>
	  	<tr>
	  		<td>Telp 085156563724</td>
	  	</tr>
	  </tbody>
	</table>
	<table>
		<tbody>
				<hr>

                <?php
            include "index.php";
            
            $qry_transaksi=mysqli_query($conn,"select t.id_transaksi as id, m.nama_member as nama_member, t.tgl as tgl, batas_waktu from transaksi t, member m where t.id_member = m.id_member");
            echo mysqli_error($conn);
            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detil_transaksi=mysqli_query($conn,"select *, detil_transaksi.qty * paket.harga as total from detil_transaksi, paket where id_transaksi = ".$data_transaksi['id']." AND paket.id_paket = detil_transaksi.id_paket");
                while($data_detil_transaksi = mysqli_fetch_array($qry_detil_transaksi)) {

                ?>
                <tr>
                    
                <tr>
				<td>Pelanggan</td>
				<td>:</td>
                <td><?=$data_transaksi['nama_member']?></td>
                </tr>

                <tr>
				<td>Tanggal Terima</td>
				<td>:</td>
                <td><?=$data_transaksi['tgl']?></td>
                </tr>

                <tr>
				<td>Tanggal Selesai</td>
				<td>:</td>
                <td><?=$data_transaksi['batas_waktu']?></td>
                </tr>
                
                <tr>
				<td>Paket Cucian</td>
				<td>:</td>
                <td><?=$data_detil_transaksi['jenis']?></td>
                </tr>

                <tr>
				<td>Jumlah kiloan/potong</td>
				<td>:</td>
                <td><?=$data_detil_transaksi['qty']?></td>
                </tr>
             
                <tr>
				<td>Total Harga</td>
				<td>:</td>
                <td><?=$data_detil_transaksi['total']?></td>
                </tr>













			
		</tbody>
	</table>
	
	<br><br>
	
	<table>
		<tr>
			<td><b>Catatan:</b></td>
		</tr>
		<tr>
			<td>Jika barang tidak diambil selama 3 bulan, kami tidak bertanggung jawab. apabila barang hilang atau lainnya.</td>
		</tr>
	</table>
		</div>
	</div>
</div>
	

<script>
	window.print();
	window.onfocus = function() {window.close();}	
</script>

</body>
<?php
        }}
?>