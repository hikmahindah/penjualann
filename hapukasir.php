?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kasir WHERE id_kasir = '$id'";

if($koneksi->query($query)) {
    header("location: tampilkasir.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>