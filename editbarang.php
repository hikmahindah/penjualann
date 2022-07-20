<?php 
  
  include('koneksii.php');
  
  $id_barang = $_GET['id_barang'];
  
  $query = "SELECT * FROM barang WHERE id_barang = $id_barang LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit barang</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BARANG
            </div>
            <div class="card-body">
              <form action="update barang.php" method="POST">
                
                <div class="form-group">
                  <label>id_barang</label>
                  <input type="text" name="id_barang" value="<?php echo $row['id_barang'] ?>" placeholder="Masukkan id_barang" class="form-control”>
                  <input type="hidden" name="nama_barang" value="<?php echo $row['nama_barang'] ?>">
                </div>

                <div class="form-group">
                  <label>nama_barang</label>
                  <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>" placeholder="Masukkan nama_barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>stok</label>
                  <input type="text" name="stok" value="<?php echo $row['nama_barang'] ?>" placeholder="Masukkan stok" class="form-control">
                </div>

                <div class="form-group">
                    <label>harga_modal</label>
                    <input type="text" name="harga_modal" value="<?php echo $row['harga_modal'] ?>" placeholder="Masukkan harga_modal" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>harga_jual</label>
                    <input type="text" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" placeholder="Masukkan harga_jual" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>id_kategori</label>
                    <input type="text" name="id_kategori" value="<?php echo $row['id_kategori'] ?>" placeholder="Masukkan id_kategori" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>id_supplier</label>
                    <input type="text" name="id_supplier" value="<?php echo $row['id_supplier'] ?>" placeholder="Masukkan id_supplier" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>tanggal_masuk</label>
                    <input type="text" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk'] ?>" placeholder="Masukkan tanggal_masuk" class="form-control">
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