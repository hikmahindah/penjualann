<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data perusahaan</title>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">PENJUALAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <a class="nav-link active" aria-current="page" href="tampilcabang.php">Cabang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampildatabarang.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilkasir.php">Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilkategori.php">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilmember.php">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilmetodepembayaran.php">Metode Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilperusahaan.php">Perusahaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampilsupplier.php">Supplier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampiltransaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tampiltransaksidetail.php">Transaksi Detail</a>
        </li>
      </form>
    </div>
  </div>
</nav>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA PERUSAHAAN
            </div>
            <div class="card-body">
              <a href="tambahperusahaan.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">id_perusahaan</th>
                    <th scope="col">nama_perusahaan</th>
                    <th scope="col">alamat</th>
                    <th scope="col">no_tlpn</th>
                    <th scope="col">email</th>
                    <th scope="col">tanggal_berdiri</th>
                    <th scope="col">npwp</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksii.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM perusahaan");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_perusahaan'] ?></td>
                      <td><?php echo $row['nama_perusahaan'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['no_tlpn'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['tanggal_berdiri'] ?></td>
                      <td><?php echo $row['npwp'] ?></td>
                      <td class="text-center">
                        <a href="editperusahaan.php?id=<?php echo $row['id_perusahaan'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapusperusahaan.php?id=<?php echo $row['id_perusahaan'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>