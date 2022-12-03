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

$satu="INSERT INTO dokter (id_dr, nm_dr, email, tlp, ket, foto) VALUES ('$id_dr', '$nm_dr', '$email', '$tlp', '$ket', '$rename')";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL MENGINPUT DATA DOKTER!');
		window.location="dokter.php";
	</script>
<?php
}
?>