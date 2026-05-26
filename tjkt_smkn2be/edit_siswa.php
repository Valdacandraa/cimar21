<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM siswa_tjkt WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];

$query = mysqli_query($conn,

"UPDATE siswa_tjkt SET

nama_siswa='$nama_siswa',
kelas='$kelas'

WHERE id='$id'"

);

if($query){

header("Location:data_siswa.php");

}else{

echo "Update gagal";

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Siswa</title>

</head>

<body>

<h1>Edit Siswa</h1>

<form method="POST">

<input type="text"
name="nama_siswa"
value="<?php echo $d['nama_siswa']; ?>">

<br><br>

<input type="text"
name="kelas"
value="<?php echo $d['kelas']; ?>">

<br><br>

<button type="submit"
name="update">

Update

</button>

</form>

</body>
</html>