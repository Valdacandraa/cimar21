<?php
session_start();

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "2526_07" && $password == "12345678"){

$_SESSION['login'] = true;

header("Location:dashboard.php");
exit;

}else{

$error = true;

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login TJKT</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins;
}

body{

height:100vh;

display:flex;

justify-content:center;

align-items:center;

background-image:url('foto.jpg');

background-size:cover;

background-position:center;

background-repeat:no-repeat;

}

/* BOX LOGIN */

.login-box{

width:380px;

padding:40px;

border-radius:30px;

background:rgba(255,255,255,0.75);

backdrop-filter:blur(8px);

box-shadow:0 5px 20px rgba(0,0,0,0.2);

text-align:center;

}

/* JUDUL */

.login-box h1{

color:#005bea;

margin-bottom:35px;

font-size:45px;

}

/* INPUT */

.login-box input{

width:100%;

padding:16px;

margin-bottom:20px;

border:none;

border-radius:15px;

background:#f4f7ff;

font-size:18px;

outline:none;

}

/* BUTTON */

.login-box button{

width:100%;

padding:16px;

border:none;

border-radius:15px;

background:linear-gradient(90deg,#00bfff,#ffe066);

color:white;

font-size:20px;

font-weight:bold;

cursor:pointer;

transition:0.3s;

}

.login-box button:hover{

transform:scale(1.03);

}

/* TEXT */

.login-box p{

margin-top:20px;

color:#555;

font-size:16px;

}

/* ERROR */

.error{

background:#ffb3b3;

padding:12px;

border-radius:10px;

margin-bottom:20px;

color:red;

font-weight:bold;

}

.stiker{

font-size:30px;

margin-bottom:15px;

}

</style>

</head>

<body>

<div class="login-box">

<div class="stiker">
💻 🌐 ✨ 🎓
</div>

<h1>LOGIN TJKT</h1>

<?php if(isset($error)){ ?>

<div class="error">
Username / Password Salah
</div>

<?php } ?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required
>

<input
type="password"
name="password"
placeholder="Password"
required
>

<button type="submit" name="login">
LOGIN
</button>

</form>

<p>
SMKN 2 Baleendah 💙
</p>

</div>

</body>
</html>