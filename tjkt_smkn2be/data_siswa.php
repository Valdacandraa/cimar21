<?php
session_start();

if(!isset($_SESSION['login'])){
header("Location:login.php");
exit;
}

include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM siswa_tjkt");

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Siswa TJKT</title>

<style>

body{
font-family:Poppins;
background:#fffdf5;
padding:30px;
}

h1{
color:#e6b800;
}

.menu{
margin-bottom:20px;
}

.menu a{
padding:12px 20px;
background:#ffeaa7;
color:black;
text-decoration:none;
border-radius:10px;
margin-right:10px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
margin-top:20px;
}

th{
background:#ffeaa7;
color:black;
padding:15px;
}

td{
padding:15px;
text-align:center;
border:1px solid #ddd;
}

</style>

</head>

<body>

<h1>🎓 Data Siswa TJKT</h1>

<div class="menu">

<a href="dashboard.php">
Dashboard
</a>

<a href="tambah_siswa.php">
Tambah Siswa
</a>

<a href="logout.php">
Logout
</a>

</div>

<table>

<tr>

<th>No</th>
<th>Nama Siswa</th>
<th>Kelas</th>
<th>Aksi</th>

</tr>

<?php
$no = 1;

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $d['nama_siswa']; ?></td>

<td><?php echo $d['kelas']; ?></td>

<td>

<a href="edit_siswa.php?id=<?php echo $d['id']; ?>">
Edit
</a>

|

<a href="hapus_siswa.php?id=<?php echo $d['id']; ?>">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>