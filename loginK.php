<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];

$ambil="SELECT * FROM atmin WHERE username='$user' AND password='$pass'";
$take=mysqli_query($mysql, $ambil);
$tes=mysqli_num_rows($take);

	if ($tes>0)
	{
		$file=mysqli_fetch_array($take);
		session_start();
		$_SESSION['username']=$user;
		$_SESSION['id_adm']=$file['id_adm'];
		header('location:dashboard.php');
	}
	else
	{
	?>
		<script type="text/javascript">
			alert ('USERNAME ATAU PASSWORD YANG ANDA MASUKKAN SALAH !');
			window.location="login.php";
		</script>
	<?php
	}
	?>