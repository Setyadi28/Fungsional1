<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'login');
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$cek = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

if (mysqli_num_rows($cek) > 0){
echo "<script>alert('username sudah terdaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($username)){
echo "<script>alert('username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($password)){
echo "<script>alert('password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($nama)){
echo "<script>alert('nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($nim)){
echo "<script>alert('nim belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$daftar = mysqli_query($conn,"INSERT INTO users (id_user,username,password,nama,nim) values ('', '$username','$password','$nama','$nim')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
}
?>