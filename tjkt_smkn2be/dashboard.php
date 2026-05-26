<?php
session_start();

if(!isset($_SESSION['login'])){
header("Location:login.php");
exit;
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard TJKT</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins;
}

body{

display:flex;

height:100vh;

background:linear-gradient(135deg,#cfe9ff,#fff5b8);

}

/* SIDEBAR */

.sidebar{

width:250px;

height:100vh;

background:linear-gradient(180deg,#005bea,#8fd3ff,#ffe066);

padding:30px;

position:fixed;

}

.sidebar h1{

color:white;

margin-bottom:40px;

font-size:45px;

text-align:center;

}

.sidebar a{

display:block;

text-decoration:none;

background:rgba(255,255,255,0.2);

padding:18px;

margin-bottom:20px;

border-radius:20px;

color:white;

font-size:20px;

font-weight:bold;

transition:0.3s;

}

.sidebar a:hover{

background:rgba(255,255,255,0.4);

transform:scale(1.05);

}

/* CONTENT */

.content{

margin-left:250px;

width:100%;

height:100vh;

display:flex;

justify-content:center;

align-items:center;

}

/* CARD */

.card{

width:700px;

padding:50px;

background:rgba(255,255,255,0.8);

border-radius:30px;

text-align:center;

box-shadow:0 5px 20px rgba(0,0,0,0.2);

backdrop-filter:blur(5px);

}

.card h1{

font-size:45px;

color:#005bea;

margin-bottom:20px;

}

.card p{

font-size:22px;

margin-bottom:15px;

color:#444;

}

.stiker{

font-size:40px;

margin-top:25px;

}

</style>

</head>

<body>

<div class="sidebar">

<h1>TJKT</h1>

<a href="dashboard.php">🏠 Dashboard</a>

<a href="index.php">💻 Data Guru</a>

<a href="data_siswa.php">🎓 Data Siswa</a>

<a href="logout.php">🚪 Logout</a>

</div>

<div class="content">

<div class="card">

<h1>Selamat Datang ✨</h1>

<p>
CRUD Data Guru & Siswa
TJKT SMKN 2 Baleendah
</p>

<p>
Teknik Jaringan Komputer
dan Telekomunikasi
</p>

<div class="stiker">
💻 🌐 🖥️ 🔌 📡
</div>

</div>

</div>

</body>
</html>