<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah cabang</title>
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
              <form action="simpancabang.php" method="POST">
                
                <div class="form-group">
                  <input type="hidden" name="id_cabang" placeholder="Masukkan id_cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>nama_cabang</label>
                  <input type="text" name="nama_cabang" placeholder="Masukkan nama_cabang" class="form-control">
                </div>

                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control">
                </div>


                <div class="form-group">
                  <label>no_tlpn</label>
                  <input type="text" name="no_tlpn" placeholder="Masukkan no_tlpn" class="form-control">
                </div>


                <div class="form-group">
                  <label>email</label>
                  <input type="text" name="email" placeholder="Masukkan email" class="form-control">
                </div>


                <div class="form-group">
                  <label>id_perusahaan</label>
                  <input type="text" name="id_perusahaan" placeholder="Masukkan id_perusahaan" class="form-control">
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