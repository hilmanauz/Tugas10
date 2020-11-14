<html>
<head>
  <title>Tugas 10 CRUD</title>
</head>
<body>
  <h1>Ubah Data Produk</h1>
  <?php
  include "koneksi.php";
  $id = $_GET['id'];
  $sql = $pdo->prepare("SELECT * FROM produk WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>Nama Produk</td>
        <td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
