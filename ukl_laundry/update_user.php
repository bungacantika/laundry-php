<?php
include 'index.php';

$id_user=$_POST['id_user'];
$nama_user=$_POST['nama_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$query="UPDATE user SET nama_user='$nama_user',username='$username', password='$password', role='$role' where id_user='$id_user'";
mysqli_query($conn, $query);

if($query){
    echo "<script>alert('Sukses edit data user');location.href='tampil_user.php';</script>";
    } else {
    echo "<script>alert('Gagal edit data user');location.href='tampil_user.php';</script>";
    }
?>