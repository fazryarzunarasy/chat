<?php
include "koneksi.php";
$chat = $_REQUEST['chat'];
$Tanggal = $_REQUEST['Tanggal'];



$mysqli = "INSERT INTO chat1 (chat,Tanggal) VALUES ('$chat','$Tanggal')";

$result = mysqli_query($koneksi, $mysqli);
if ($result) {
echo "Input berhasil";
} else {
echo "Input gagal";
}
mysqli_close($koneksi);

header("location:query.php");
?>



