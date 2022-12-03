<?php
require 'koneksi.php';
$id_pas=$_POST['id_pas'];
$nm_pas=$_POST['nm_pas'];
$jk_pas=$_POST['jk_pas'];
$almt=$_POST['almt'];
$tlp_pas=$_POST['tlp_pas'];
$keluhan=$_POST['keluhan'];
$nm_dr=$_POST['nm_dr'];

$satu="UPDATE pasien SET nm_pas='$nm_pas', jk_pas='$jk_pas', almt='$almt', tlp_pas='$tlp_pas', keluhan='$keluhan', nm_dr='$nm_dr' where id_pas='$id_pas'";
$konek=mysqli_query ($mysql, $satu);
if ($konek)
{
	?>
	<script type="text/javascript">
		alert ('BERHASIL EDIT DATA PASIEN!');
		window.location="pasien.php";
	</script>
<?php
}
?>