<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_kasir   = $_POST['id_kasir'];
$nama_kasir = $_POST['nama_kasir'];
$alamat      = $_POST['alamat'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$no_tlpn       = $_POST['no_tlpn'];
$id_cabang = $_POST['id_cabang'];

//query insert data ke dalam database
$query = "INSERT INTO cabang (id_kasir, nama_kasir, alamat,jenis_kelamin,no_tlpn,id_cabang) VALUES ('$id_kasir', '$nama_kasir', '$alamat','$jenis_kelamin','$no_tlpn','$id_cabang')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampilkasir.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>