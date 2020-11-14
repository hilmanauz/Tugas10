<?php
include "koneksi.php";
$id = $_GET['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$sql = $pdo->prepare("UPDATE produk SET nama_produk=:nama_produk, keterangan=:keterangan, harga=:harga, jumlah=:jumlah WHERE id=:id");
$sql->bindParam(':nama_produk', $nama_produk);
$sql->bindParam(':keterangan', $keterangan);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':jumlah', $jumlah);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){
  header("location: index.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>
