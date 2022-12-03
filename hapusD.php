<?php
  include 'koneksi.php';
  $id = $_GET['id_dr'];
  $sql="DELETE FROM dokter WHERE id_dr='$id'";
  $konek= mysqli_query($mysql, $sql);
if ($konek)
{
  ?>
  <script type="text/javascript">
    alert ('BERHASIL HAPUS DATA DOKTER!');
    window.location="dokter.php";
  </script>
<?php
}
else {
  ?>
  <script type="text/javascript">
    alert ('GAGAL HAPUS DATA PASIEN!');
    window.location="dokter.php";
  </script>
<?php
}
?>