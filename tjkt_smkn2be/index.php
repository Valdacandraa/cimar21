<?php
session_start();

if(!isset($_SESSION['login'])){
header("Location:login.php");
exit;
}

include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM guru_tjkt");

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Guru TJKT</title>

<style>

body{
font-family:Poppins;
background:#eef4ff;
padding:30px;
}

h1{
color:#005bea;
}

.menu{
margin-bottom:20px;
}

.menu a{
padding:12px 20px;
background:#74b9ff;
color:white;
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
background:#74b9ff;
color:white;
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

<h1>💻 Data Guru TJKT</h1>

<div class="menu">

<a href="dashboard.php">
Dashboard
</a>

<a href="tambah.php">
Tambah Guru
</a>

<a href="logout.php">
Logout
</a>

</div>

<table>

<tr>

<th>No</th>
<th>Nama Guru</th>
<th>Mapel</th>
<th>Aksi</th>

</tr>

<?php
$no = 1;

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $d['nama_guru']; ?></td>

<td><?php echo $d['mapel']; ?></td>

<td>

<a href="edit.php?id=<?php echo $d['id']; ?>">
Edit
</a>

|

<a href="hapus.php?id=<?php echo $d['id']; ?>">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>