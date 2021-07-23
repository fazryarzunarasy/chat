
<?php
// buat koneksi dengan database mysql
$dbhost = "185.27.134.10";
$dbuser = "ezyro_28537268";
$dbpass = "";
$dbname = "ezyro_28537268_chat";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 
//periksa koneksi, tampilkan pesan kesalahan jika gagal
if(!$koneksi){
die ("Koneksi database gagal: ".mysqli_connect_errno().
" - ".mysqli_connect_error());
     }
?>

<?php
  $host ="185.27.134.10"; //host server
  $user ="ezyro_28537268"; //user login phpMyAdmin
  $pass =""; //pass login phpMyAdmin
  $db ="ezyro_28537268_chat"; //nama database
  $koneksi = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>