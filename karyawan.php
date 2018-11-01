<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIP	:</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
include "koneksi.php";
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];

	if (isset($nip)) {
		$query = mysqli_query($conn,"INSERT INTO `karyawan`(`nama`, `nip`) VALUES ('$nama','$nip')");
		if ($query) {
			echo "<h1>Berhasil</h1>";
		}else{
			echo"Gagal!";
		}
	}

}
?>