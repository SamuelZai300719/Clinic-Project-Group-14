<?php
require 'koneksi.php';
$id_rmed=$_POST['id_rmed'];
$tgl=$_POST['tgl'];
$nm_pas=$_POST['nm_pas'];
$nm_dr=$_POST['nm_dr'];
$keluhan=$_POST['keluhan'];
$status=$_POST['status'];

$satu="UPDATE rmedis SET tgl='$tgl', nm_pas='$nm_pas', nm_dr='$nm_dr', keluhan='$keluhan', status='$status' where id_rmed='$id_rmed'";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL EDIT DATA PASIEN!');
		window.location="rmedis.php";
	</script>
<?php
}
?>