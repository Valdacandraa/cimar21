<?php
session_start();

if(!isset($_SESSION['login'])){
header("Location: login.php");
exit;
}

include 'koneksi.php';

$data = mysqli_query(
$conn,
"SELECT * FROM guru_tjkt"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Guru TJKT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
background: linear-gradient(to right,#1e90ff,#ffd700);
min-height:100vh;
padding:30px;
}

.container-box{
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 0 20px rgba(0,0,0,0.2);
}

h2{
font-weight:700;
text-align:center;
margin-bottom:20px;
}

.btn-tambah{
background:#1e90ff;
border:none;
}

.btn-tambah:hover{
background:#1877d2;
}

.table{
border-radius:10px;
overflow:hidden;
}

thead{
background:#1e90ff;
color:white;
}

.btn-edit{
background:orange;
color:white;
}

.btn-hapus{
background:red;
color:white;
}

.logo{
width:100px;
display:block;
margin:auto;
margin-bottom:15px;
}

</style>

</head>
<body>

<div class="container">

<div class="container-box">

<img src="logo.png" class="logo">

<h2>DATA GURU TJKT<br>SMKN 2 BALEENDAH</h2>

<div class="mb-3 d-flex justify-content-between">

<a href="tambah.php"
class="btn btn-primary btn-tambah">
+ Tambah Guru
</a>

<a href="logout.php"
class="btn btn-danger">
Logout
</a>

</div>

<table class="table table-bordered table-hover">

<thead>
<tr>
<th>No</th>
<th>Nama Guru</th>
<th>Mata Pelajaran</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>
<td><?= $no++; ?></td>

<td><?= $row['nama_guru']; ?></td>

<td><?= $row['mapel']; ?></td>

<td>

<a href="edit.php?id=<?= $row['id']; ?>"
class="btn btn-sm btn-edit">
Edit
</a>

<a href="hapus.php?id=<?= $row['id']; ?>"
onclick="return confirm('Yakin ingin hapus data?')"
class="btn btn-sm btn-hapus">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>
</table>

</div>
</div>

</body>
</html>