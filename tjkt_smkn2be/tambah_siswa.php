<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];

$query = mysqli_query($conn,

"INSERT INTO siswa_tjkt VALUES
(
NULL,
'$nama_siswa',
'$kelas'
)"

);

if($query){

header("Location:data_siswa.php");

}else{

echo "Data gagal";

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah Siswa</title>

</head>

<body>

<h1>Tambah Siswa</h1>

<form method="POST">

<input type="text"
name="nama_siswa"
placeholder="Nama Siswa">

<br><br>

<input type="text"
name="kelas"
placeholder="Kelas">

<br><br>

<button type="submit"
name="simpan">

Simpan

</button>

</form>

</body>
</html>