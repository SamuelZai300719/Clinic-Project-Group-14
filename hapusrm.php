<?php
include 'koneksi.php';
    $id = $_GET['id_rmed'];
    $sql="DELETE FROM rmedis WHERE id_rmed='$id'";
    $konek= mysqli_query($mysql, $sql);
if ($konek)
{
    ?>
    <script type="text/javascript">
        alert ('BERHASIL HAPUS DATA REKAM MEDIS!');
        window.location="rmedis.php";
    </script>
<?php
}
else {
    ?>
    <script type="text/javascript">
        alert ('GAGAL HAPUS DATA REKAM MEDIS!');
        window.location="rmedis.php";
    </script>
<?php
}
?>