<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah transaksi detail</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">  
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="simpantransaksidetail.php" method="POST">
                
                <div class="form-group">
                  <label>id_transaski_datail</label>
                  <input type="hidden" name="id_transaksi_detail" placeholder="Masukkan id_transaksi_detail" class="form-control">
                </div>

                <div class="form-group">
                  <label>id_transaksi</label>
                  <input type="text" name="id_transaksi" placeholder="Masukkan id_transaksi" class="form-control">
                </div>

                  <div class="form-group">
                  <label>id_barang</label>
                  <input type="text" name="id_barang" placeholder="Masukkan id_barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" name="jumlah" placeholder="Masukkan jumlah" class="form-control">
                </div>

                <div class="form-group">
                  <label>harga_jual</label>
                  <input type="text" name="harga_jual" placeholder="Masukkan harga_jual" class="form-control">
                </div>
          
                 <button type="submit" class="btn btn-success">SIMPAN</button>
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