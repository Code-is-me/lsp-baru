<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>
<!DOCTYPE html>
<html lang="en">
<head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website sekolah SMK Pesat</title>
    <style type="text/css">
    a {
     background-color: gray;
     color: #fff;
     padding: 10px;
     text-decoration: none;
    font-size: 13px;
}    
h1 {
   text-transform: uppercase;
    color: salmon;
    font-family: sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}   
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#Gallery">Gallery</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div style="padding-left:16px">


  <center><h1>Selamat datang di Website Kami</h1></center>

<center> <a href="login.php">&nbsp;Login</a></center>
</br>
 
 <center>  <a href="tambah.php">&nbsp;Pendaftaran Siswa</a></center>
</br>













</body>
</html>