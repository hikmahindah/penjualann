<?php 
  
  include('koneksii.php');
  
  $id_perusahaan = $_GET['id_perusahaan'];
  
  $query = "SELECT * FROM supplier WHERE id_supplier= $id_supplier LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit supplier</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SUPPLIER
            </div>
            <div class="card-body">
              <form action="updatesupplier.php" method="POST">
                
                <div class="form-group">
                  <label>id_supplier</label>
                  <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier'] ?>" placeholder="Masukkan id_supplier" class="form-control”>
                  <input type="hidden" name="nama_supplier" value="<?php echo $row['nama_supplier'] ?>">
                </div>

                <div class="form-group">
                  <label>no_tlpn</label>
                  <input type="text" name="no_tlpn" value="<?php echo $row['no_tlpn'] ?>" placeholder="Masukkan no_tlpn" class="form-control">
                </div>

                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan alamat" class="form-control">
                </div>

                <div class="form-group">
                    <label>no_rek</label>
                    <input type="text" name="no_rek" value="<?php echo $row['no_rek'] ?>" placeholder="Masukkan no_rek" class="form-control">
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