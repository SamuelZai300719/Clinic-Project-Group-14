<?php
  include 'koneksi.php';
  $id = $_GET['id_pas'];
  $sql="DELETE FROM pasien WHERE id_pas='$id'";
  $konek= mysqli_query($mysql, $sql);
if ($konek)
{
  ?>
  <script type="text/javascript">
    alert ('BERHASIL HAPUS DATA PASIEN!');
    window.location="pasien.php";
  </script>
<?php
}
else {
  ?>
  <script type="text/javascript">
    alert ('GAGAL HAPUS DATA PASIEN!');
    window.location="pasien.php";
  </script>
<?php
}
?>