<?php 
  
  include('koneksii.php');
  
  $id= $_GET['id'];
  
  $query = "SELECT * FROM kategori WHERE id_kategori= $id";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit kategori</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT KATEGORI
            </div>
            <div class="card-body">
              <form action="updatekategori.php" method="POST">
                
                <div class="form-group">
                  <input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'] ?>" placeholder="Masukkan id_kategori" class="form-control”>
                  <input type="hidden" name="id_kategori" value="<?php echo $row['id_kategori'] ?>">
                </div>

                
                <div class="form-group">
                  <label>nama_kategori</label>
                  <input type="text" name="nama_kategori" class="form-control” value="<?php echo $row['nama_kategori'] ?> placeholder="Masukkan nama_kategori">
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