<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_perusahaan   = $_POST['id_perusahaan'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat    = $_POST['alamat'];
$no_tlpn= $_POST['no_tlpn'];
$email= $_POST['email'];
$tanggal_berdiri = $_POST['tanggal_berdiri'];
$npwp = $_POST['npwp'];

//query insert data ke dalam database
$query = "INSERT INTO perusahaan (id_perusahaan, nama_perusahaan, alamat ,no_tlpn,email,tanggal_berdiri,npwp) VALUES ('$id_perusahaan', '$nama_perusahaan', '$alamat','$no_tlpn','$email','$tanggal_berdiri','$npwp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location:tampilperusahaan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>