<?php
include "koneksi.php";
$User_Name = $_REQUEST['User_Name'];
$Passwords = $_REQUEST['Passwords'];



$mysqli = "INSERT INTO chat (User_Name,Passwords) VALUES ('$User_Name','$Passwords')";

$result = mysqli_query($koneksi, $mysqli);
if ($result) {
echo "Input berhasil";
} else {
echo "Input gagal";
}
mysqli_close($koneksi);

header("location:chat.php");
?>



