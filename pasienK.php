<?php
require 'koneksi.php';
$id_pas=$_POST['id_pas'];
$nm_pas=$_POST['nm_pas'];
$jk_pas=$_POST['jk_pas'];
$almt=$_POST['almt'];
$tlp=$_POST['tlp_pas'];
$keluhan=$_POST['keluhan'];
$nm_dr=$_POST['nm_dr'];

$satu="INSERT INTO pasien (id_pas, nm_pas, jk_pas, almt, tlp_pas, keluhan, nm_dr) VALUES ('$id_pas', '$nm_pas', '$jk_pas', '$almt', '$tlp', '$keluhan', '$nm_dr')";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL MENGINPUT DATA PASIEN!');
		window.location="pasien.php";
	</script>
<?php
}
?>