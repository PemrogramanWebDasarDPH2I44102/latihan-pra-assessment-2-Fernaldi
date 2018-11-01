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
				<td>Tanggal Datang : </td>
				<td><input type="date" name="tgld"></td>
			</tr>
			<tr>
				<td>Sasaran	:</td>
				<td><input type="text" name="sasaran"></td>
			</tr>
			<tr>
				<td>Penerima	:</td>
				<td><input type="text" name="penerima"></td>
			</tr>
			<tr>
				<td>Isi Paket	:</td>
				<td><input type="text" name="isi"></td>
			</tr>
			<tr>
				<td>Tanggal Diambil	:</td>
				<td><input type="date" name="tgla"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"><button style="text-decoration: none"><a href="table.php"</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
include "koneksi.php";
if (isset($_POST['submit'])){
	$tglda = $_POST['tgld'];
	$sas = $_POST['sasaran'];
	$pen = $_POST['penerima'];
	$isi = $_POST['isi'];
	$tglam = $_POST['tgla'];

	if (isset($sas)) {
		$query = mysqli_query($conn,"INSERT INTO `paket`(`tgl_datang`, `sasaran`, `penerima`, `isi_paket`, `tgl_ambil`) VALUES ('$tglda','$sas','$pen','$isi','$tglam')");
		if ($query) {
			echo "<h1>Berhasil</h1>";
		}else{
			echo"Gagal!";
		}
	}
}
?>