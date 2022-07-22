<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_cabang     = $_POST['id_cabang'];
$nama_cabang   = $_POST['nama_cabang'];
$alamat        = $_POST['alamat'];
$no_tlpn       = $_POST['no_tlpn'];
$email         = $_POST['email'];
$id_perusahaan = $_POST['id_perusahaan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE cabang SET  nama_cabang = '$nama_cabang', alamat = '$alamat',no_tlpn= '$no_tlpn',email= '$email',id_perusahaan= '$id_perusahaan' WHERE id_cabang = '$id_cabang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: tampilcabang.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>