<?php
require 'koneksi.php';
$email=$_POST['email'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$satu="INSERT INTO atmin (email, nm_adm, username, password, telp) VALUES ('$email', '$nama', '$username', '$password', '$telp')";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('REGRISTRASI BERHASIL, SILAHKAN MELAKUKAN LOGIN !');
		window.location="login.php";
	</script>
<?php
}
?>