<?php 
  
  include('koneksii.php');
  
  $id_transaksi = $_GET['id_transaksi'];
  
  $query = "SELECT * FROM transaksi WHERE id_transaksi= $id_transaksi LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="updatetransaksi.php" method="POST">
                
                <div class="form-group">
                  <label>id_transaksi</label>
                  <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>" placeholder="Masukkan id_transaksi" class="form-control”>
                  <input type="hidden" name="kode_inv" value="<?php echo $row['kode_inv'] ?>">
                </div>

                <div class="form-group">
                  <label>waktu_transaksi</label>
                  <input type="text" name="waktu_transaksi" value="<?php echo $row['waktu_transaksi'] ?>" placeholder="Masukkan waktu_transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <label>id_kasir</label>
                  <input type="text" name="id_kasir" value="<?php echo $row['"id_kasir'] ?>" placeholder="Masukkan id_kasir" class="form-control">
                </div>

                <div class="form-group">
                    <label>id_member</label>
                    <input type="text" name="id_member" value="<?php echo $row['id_member'] ?>" placeholder="Masukkan id_member" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>nama_pembeli</label>
                    <input type="text" name="nama_pembeli" value="<?php echo $row['nama_pembeli'] ?>" placeholder="Masukkan nama_pembeli" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>id_metode_pembayaran</label>
                    <input type="text" name="id_metode_pembayaran" value="<?php echo $row['id_metode_pembayaran'] ?>" placeholder="Masukkan id_metode_pembayaran" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>total_bayar</label>
                    <input type="text" name="total_bayar" value="<?php echo $row['total_bayar'] ?>" placeholder="Masukkan total_bayar" class="form-control">
                  </div>
               
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>