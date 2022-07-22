<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_perusahaan     = $_POST['id_perusahaan'];
$nama_perusahaan  = $_POST['nama_perusahaan'];
$alamat        = $_POST['alamat'];
$no_tlpn   = $_POST['no_tlpn'];
$email    = $_POST['email'];
$tanggal_berdiri  = $_POST['tanggal_bediri'];
$npwp   = $_POST['npwp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE perusahaan SET id_perusahaan = '$id_perusahaan', nama_perusahaan = '$nama_perusahaan', alamat = '$alamat', no_tlpn= '$no_tlpn', email='$email',tanggal_berdiri= '$tanggal_berdiri',npwp= '$npwp' WHERE id_perusahaan = '$id_perusahaan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>