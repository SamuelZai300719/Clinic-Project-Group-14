<?php
include 'koneksi.php';
    $id = $_GET['id_produk'];
    $sql="DELETE FROM produk WHERE id_produk='$id'";
    $konek= mysqli_query($mysql, $sql);
if ($konek)
{
    ?>
    <script type="text/javascript">
        alert ('BERHASIL HAPUS DATA PRODUK!');
        window.location="produk.php";
    </script>
<?php
}
else {
    ?>
    <script type="text/javascript">
        alert ('GAGAL HAPUS DATA PRODUK!');
        window.location="produk.php";
    </script>
<?php
}
?>