<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_transaksi_detail    = $_POST['id_transaksi_detail'];
$id_transaksi  = $_POST['id_transaksi'];
$id_barang   = $_POST['id_barang'];
$jumlah        = $_POST['jumlah'];
$harga_jual    = $_POST['harga_jual'];
$total_harga  = $_POST['total_harga'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi_detail SET id_transaksi_detail = '$id_transaksi_detail', id_transaksi = '$id_transaksi', id_barang= '$id_barang', jumlah = '$jumlah',harga_jual= '$harga_jual',total_harga= '$total_harga' WHERE id_transaksi_detail = '$id_transaksi_detail'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>