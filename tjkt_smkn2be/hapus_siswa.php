<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query($conn,

"DELETE FROM siswa_tjkt
WHERE id='$id'"

);

header("Location:data_siswa.php");

?>