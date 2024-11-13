<?php

include 'koneksi.php';
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $sql = "UPDATE data SET nama='$nama', deskripsi='$deskripsi' WHERE id='$id'";
  $query = mysqli_query($koneksi, $sql);  
  if ($query) {
    echo "<div class = 'alert alert-success' style='text-align:center;'> data berhasil diubahh</div>";
    
  } else {
      echo "<div class ='aletr alert-danger' style='text-align:center;'> data gagal diubah</div>";
     
  }
}
?>
