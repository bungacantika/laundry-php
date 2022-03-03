<?php
include "header.php";
?>
<html>
	<head>
		 <link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
		crossorigin="anonymous">
		 <title></title>
	</head>
	<body>
	<div class="card card-body">
	<h4>LAPORAN | <button class="btn btn-primary" onclick="const printBtn = document.getElementById('print-btn'); printBtn.hidden = true; window.print();" id="print-btn">Print</button> </h4>
    <form action="reg_pelanggan.php" method="post">
		 <h5>Data Pelanggan</h5>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO.</th><th>NAMA</th><th>ALAMAT</th>
		 <th>JENIS KELAMIN</th><th>NO.TELP</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "index.php";
		$qry_member=mysqli_query($conn,"select * from member");
		 $no=0;
		 while($data_member=mysqli_fetch_array($qry_member)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_member['nama_member']?></td>
		<td><?=$data_member['alamat']?></td>
        <td><?=$data_member['jk']?></td>
        <td><?=$data_member['telp']?></td>
		</tr>
  <?php
		 }
		 ?>
		 </tbody>
		 </table>



        <br>
         <form action="tambah_paketcuci.php" method="post">
		 <h5>Paket Cucian</h5>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>JENIS</th><th>HARGA</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "index.php";
		$qry_paket=mysqli_query($conn,"select * from paket");
		 $no=0;
		 while($data_paket=mysqli_fetch_array($qry_paket)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_paket['jenis']?></td>
        <td><?=$data_paket['harga']?></td>


        
		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>




        <br>
		<h5> Data Transaksi </h5> 
  <table class="table table-hover table-striped bg-white">
    <thead>
    <tr>
        <th>NO</th><th>NAMA PELANGGAN</th><th>TGL</th>
        <th>BATAS WAKTU</th><th>TGL BAYAR</th><th>STATUS</th>
        <th>DIBAYAR</th><th>JENIS</th><th>JUMLAH</th>
        <th>HARGA</th>

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







        <br>
        <form action="tambah_outlet.php" method="post">
		 <h5>List Outlet</h5>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA OUTLET</th><th>ALAMAT</th><th>TELP</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "index.php";
		$qry_outlet=mysqli_query($conn,"select * from outlet");
		 $no=0;
		 while($data_outlet=mysqli_fetch_array($qry_outlet)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_outlet['nama_outlet']?></td>
        <td><?=$data_outlet['alamat']?></td>
        <td><?=$data_outlet['telp']?></td>

		 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
		 </table>





         <br>
         <form action="tambah_user.php" method="post">
		 <h5>Data User</h5>
		 <table class="table table-hover table-striped">
		 <thead>
		 <tr>
		 <th>NO</th><th>NAMA USER</th><th>USERNAME</th>
		 <th>ROLE</th>
		 </tr>
		 </thead>
		 <tbody>
		 <?php
		 include "index.php";
		$qry_user=mysqli_query($conn,"select * from user");
		 $no=0;
		 while($data_user=mysqli_fetch_array($qry_user)){
		 $no++;?>
		<tr> 
		<td><?=$no?></td><td><?=$data_user['nama_user']?></td>
		<td><?=$data_user['username']?></td>
        <td><?=$data_user['role']?></td>
  </tr>
  <?php
		 }
		 ?>
		 </tbody>
		 </table>


		 <script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun	dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	</body>
</html>
<?php
include "footer.php";
?>
