<?php
require 'koneksi.php';
$id_dr=$_POST['id_dr'];
$nm_dr=$_POST['nm_dr'];
$email=$_POST['email'];
$tlp=$_POST['tlp'];
$ket=$_POST['ket'];

$folder = './dokter/';
$nama_f = $_FILES['foto']['name'];
$rename = date('hs').$nama_f;
$sumber = $_FILES['foto']['tmp_name'];
move_uploaded_file($sumber, $folder.$rename);

$satu="UPDATE dokter SET nm_dr='$nm_dr', email='$email', tlp='$tlp', ket='$ket', foto='$rename' where id_dr='$id_dr'";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL EDIT DATA DOKTER!');
		window.location="dokter.php";
	</script>
<?php
}
?>