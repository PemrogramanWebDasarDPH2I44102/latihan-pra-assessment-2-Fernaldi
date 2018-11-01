<?php 
include "koneksi.php";
$query=mysqli_query($conn, "SELECT * FROM paket");
echo "<table border=2>";
echo "<th>tgl_datang</th><th>sasaran</th><th>penerima</th><th>isi_paket</th><th>tgl_ambil</th><th>Aksi</th>";
while($satu = mysqli_fetch_array($query)){
echo "<br>";
echo "<tr>";
echo "<td>".$satu['tgl_datang']."</td>";
echo "<td>".$satu['sasaran']."</td>";
echo "<td>".$satu['penerima']."</td>";
echo "<td>".$satu['isi_paket']."</td>";
echo "<td>".$satu['tgl_ambil']."</td>";
echo "<td><a href=table.php?sas=".$satu['sasaran']."><button>Delete</button></a></td>";
echo "</tr>";

}
echo "</table>";
if (isset($_GET['sas'])) {
	$sas = $_GET['sas'];
	$ku = mysqli_query($conn,"DELETE FROM `asrama` WHERE sasaran = $sas");
	if ($ku) {
		header("Location:oop.php");
	}
}