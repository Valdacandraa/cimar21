<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

$nama_guru = $_POST['nama_guru'];
$mapel = $_POST['mapel'];

$query = mysqli_query($conn,

"INSERT INTO guru_tjkt VALUES
(
NULL,
'$nama_guru',
'$mapel'
)"

);3
if($query){

header("Location:index.php");
VB
}else{

echo "Data gagal";

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah Guru</title>

</head>

<body>

<h1>Tambah Guru</h1>

<form method="POST">

<input type="text"
name="nama_guru"
placeholder="Nama Guru">

<br><br>

<input type="text"
name="mapel"
placeholder="Mapel">

<br><br>

<button type="submit"
name="simpan">

Simpan

</button>

</form>

</body>
</html>