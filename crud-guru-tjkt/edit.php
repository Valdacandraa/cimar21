<?php

session_start();

if(!isset($_SESSION['login'])){
header("Location: login.php");
exit;
}

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM guru_tjkt
WHERE id='$id'"
);

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Guru</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
background: linear-gradient(to right,#1e90ff,#ffd700);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.card-box{
background:white;
padding:30px;
border-radius:20px;
width:500px;
box-shadow:0 0 20px rgba(0,0,0,0.2);
}

h2{
text-align:center;
font-weight:bold;
margin-bottom:20px;
}

</style>

</head>
<body>

<div class="card-box">

<h2>Edit Data Guru</h2>

<form action="proses_edit.php" method="POST">

<input type="hidden"
name="id"
value="<?= $row['id']; ?>">

<div class="mb-3">
<label>Nama Guru</label>

<input type="text"
name="nama_guru"
class="form-control"
value="<?= $row['nama_guru']; ?>"
required>
</div>

<div class="mb-3">
<label>Mata Pelajaran</label>

<input type="text"
name="mapel"
class="form-control"
value="<?= $row['mapel']; ?>"
required>
</div>

<button type="submit"
class="btn btn-primary w-100">
Update
</button>

<br><br>

<a href="index.php"
class="btn btn-warning w-100">
Kembali
</a>

</form>

</div>

</body>
</html>