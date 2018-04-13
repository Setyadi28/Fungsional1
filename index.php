<?php
session_start();
if(!isset($_SESSION ['username'])){
header ('location: login.php');
}
?>
<html>
<head>
</head>
<body>
<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'login');
$username=$_SESSION['username'];
$q=mysqli_query($conn, "select * from users where username='$username'");
while($b=mysqli_fetch_array($q)){
echo "Selamat Datang ".$b['nama']."";
} 
?>
<br>
<a href="logout.php">Logout</a>
</body>
</html> 