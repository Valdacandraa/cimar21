<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM guru_tjkt WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama_guru = $_POST['nama_guru'];
$mapel = $_POST['mapel'];

$query = mysqli_query($conn,

"UPDATE guru_tjkt SET

nama_guru='$nama_guru',
mapel='$mapel'

WHERE id='$id'"

);

if($query){

header("Location:index.php");

}else{

echo "Update gagal";

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Guru</title>

</head>

<body>

<h1>Edit Guru</h1>

<form method="POST">

<input type="text"
name="nama_guru"
value="<?php echo $d['nama_guru']; ?>">

<br><br>

<input type="text"
name="mapel"
value="<?php echo $d['mapel']; ?>">

<br><br>

<button type="submit"
name="update">

Update

</button>

</form>

</body>
</html>