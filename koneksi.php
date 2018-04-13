<?php
$link = mysqli_connect("localhost","root","") or die ("Gagal Mengkoneksikan Ke Database");
mysqli_select_db($link, "login") or die ("Database Tidak Ditemukan");
?>
