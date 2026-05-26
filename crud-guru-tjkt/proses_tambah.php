<?php

include 'koneksi.php';

$nama_guru = $_POST['nama_guru'];
$mapel = $_POST['mapel'];

mysqli_query(
$conn,
"INSERT INTO guru_tjkt
VALUES(
'',
'$nama_guru',
'$mapel'
)"
);

header("Location:index.php");

?>