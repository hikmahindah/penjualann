<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_cabang   = $_POST['id_cabang'];
$nama_cabang = $_POST['nama_cabang'];
$alamat      = $_POST['alamat'];
$no_tlpn     = $_POST['no_tlpn'];
$email       = $_POST['email'];
$id_perusahaan = $_POST['id_perusahaan'];

//query insert data ke dalam database
$query = "INSERT INTO cabang (id_cabang, nama_cabang, alamat, no_tlpn, email, id_perusahaan) VALUES ('$id_cabang', '$nama_cabang', '$alamat','$no_tlpn','$email','$id_perusahaan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampilcabang.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>