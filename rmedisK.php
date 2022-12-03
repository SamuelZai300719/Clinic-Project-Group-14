<?php
require 'koneksi.php';
$id_rmed=$_POST['id_rmed'];
$tgl=$_POST['tgl'];
$nm_pas=$_POST['nm_pas'];
$nm_dr=$_POST['nm_dr'];
$keluhan=$_POST['keluhan'];
$status=$_POST['status'];

$satu="INSERT INTO rmedis (id_rmed, tgl, nm_pas, nm_dr, keluhan, status) VALUES ('$id_rmed', '$tgl', '$nm_pas', '$nm_dr', '$keluhan', '$status')";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL MENGINPUT DATA REKAM MEDIS!');
		window.location="rmedis.php";
	</script>
<?php
}
?>