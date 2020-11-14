<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM produk WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: index.php");
}else{
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>