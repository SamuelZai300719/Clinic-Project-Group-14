<?php
require 'koneksi.php';
$id_produk=$_POST['id_produk'];
$nama_produk=$_POST['nama_produk'];
$ket_produk=$_POST['ket_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$folder = './produk/';
$nama_f = $_FILES['foto']['name'];
$rename = date('hs').$nama_f;
$sumber = $_FILES['foto']['tmp_name'];
move_uploaded_file($sumber, $folder.$rename);

$satu="UPDATE produk SET nama_produk='$nama_produk', ket_produk='$ket_produk', harga='$harga', stok='$stok', foto='$rename' where id_produk='$id_produk'";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL EDIT DATA PRODUK!');
		window.location="produk.php";
	</script>
<?php
}
?>
