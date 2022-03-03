<?php
include "header.php";
?>
<head></head>
  <body>
  <div class="card card-body">
  <legend align="center">Tambah Transaksi</legend>

          Jumlah pesanan :
          <form action="tambah_transaksi.php" method="GET">
            <input type="number" name="jumlah_paket" min="1">
            <input type="submit">
          </form>

          <form action="proses_tambahtransaksi.php" method="post">
          User :
          <input type="text" name="id_user" value="<?=$_SESSION['id_user']?>" class="form-control">
          
          Pelanggan :
          <select name="id_member" class="form-control">
            <option></option>
            <?php 
            include "index.php";
            $qry_member=mysqli_query($conn,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama_member'].'</option>';    
            }
            ?>
          </select>
          
          Tanggal :
          <input type="date" name="tgl" value="" class="form-control">

          Batas Waktu :
          <input type="date" name="batas_waktu" value="" class="form-control">
          
          Tanggal Bayar :
          <input type="date" name="tgl_bayar" value="" class="form-control">
          
          Status Cucian :
          <select name="status" class="form-control">
          <option></option>
          <option value="baru">Baru</option>
          <option value="proses">Proses</option>
          <option value="selesai">Selesai</option>
          <option value="diambil">Diambil</option>
          </select>
          
          Status Pembayaran :
          <select name="dibayar" class="form-control">
          <option></option>
          <option value="dibayar">Dibayar</option>
          <option value="belum_dibayar">Belum Dibayar</option><br>
          </select>
          <?php for ($i = 0; $i < (isset($_GET['jumlah_paket']) ? $_GET['jumlah_paket'] : 1); $i++): ?>
          
          Jenis Paket :
          <select name="id_paket[]" class="form-control">
          <option></option>
          <?php
            include "index.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            while($data_paket=mysqli_fetch_array($qry_paket)){
                echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].' - '.$data_paket['harga'].'</option>';
            }
            ?>
            </select>
            
            Jumlah :
            <input type="text" name="qty[]" value="" class="form-control">
          
          <br>
          <?php endfor; ?>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <input type="submit" name="Transaksi" value="Simpan" class="btn btn-outline-primary">    
          <input type="reset" value="Batal">
          </div>
          </div>
        
<?php
include "footer.php"
?>
</form>
      
</body>
</html>