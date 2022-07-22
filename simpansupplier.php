<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_supplier   = $_POST['id_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$no_tlpn= $_POST['no_tlpn'];
$alamat    = $_POST['alamat'];
$no_rek = $_POST['no_rek'];

//query insert data ke dalam database
$query = "INSERT INTO supplier (id_supplier, nama_supplier, no_tlpn,alamat ,no_rek) VALUES ('$id_supplier', '$nama_supplier', '$no_tlpn',$alamat','$no_rek')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampilsupplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>