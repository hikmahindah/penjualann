<?php 
  
  include('koneksii.php');
  
  $id_metode_pembayaran = $_GET['id_metode_pembayaran'];
  
  $query = "SELECT * FROM metode_pembayaran WHERE id_metode_pembayaran= $id_metode_pembayaran LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit metode pembayaran</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT METODE PEMBAYARAN
            </div>
            <div class="card-body">
              <form action="updatemetode_pembayaran.php" method="POST">
                
                <div class="form-group">
                  <label>id_metode_pembayaran</label>
                  <input type="hidden" name="id_metode_pembayaran" value="<?php echo $row['id_metode_pembayaran'] ?>" placeholder="Masukkan id_metode_pembayaran" class="form-control”>
                  <input type="hidden" name="nama_metode_pembayaran" value="<?php echo $row['nama_metode_pembayaran'] ?>">
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