<?php 
  
  include('koneksii.php');
  
  $id_perusahaan = $_GET['id_perusahaan'];
  
  $query = "SELECT * FROM perusahaan WHERE id_perusahaan= $id_perusahaan LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit perusahaan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PERUSAHAAN
            </div>
            <div class="card-body">
              <form action="updateperusahaan.php" method="POST">
                
                <div class="form-group">
                  <label>id_perusahaan</label>
                  <input type="hidden" name="id_perusahaan" value="<?php echo $row['id_perusahaan'] ?>" placeholder="Masukkan id_perusahaan" class="form-control”>
                  <input type="hidden" name="nama_perusahaan" value="<?php echo $row['nama_perusahaan'] ?>">
                </div>

                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>no_tlpn</label>
                  <input type="text" name="no_tlpn" value="<?php echo $row['no_tlpn'] ?>" placeholder="Masukkan no_tlpn" class="form-control">
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan email" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>tanggal_berdiri</label>
                    <input type="text" name="tanggal_berdiri" value="<?php echo $row['tanggal_berdiri'] ?>" placeholder="Masukkan tanggal_berdiri" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>npwp</label>
                    <input type="text" name="npwp" value="<?php echo $row['npwp'] ?>" placeholder="Masukkan npwp" class="form-control">
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