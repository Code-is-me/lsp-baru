<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form pendaftaran siswa</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
  <center>
        <h1>Pendaftaran Siswa Baru</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Siswa</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Tempat lahir</label>
         <input type="text" name="tempat lahir" />
        </div>
        <div>
          <label>Warga negara</label>
         <input type="text" name="warga negara" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" required=""/>
        </div>
        <div>
            <label> Nomor Hp </label>
            <input type="text" name="nomor hp" required=""/>
        </div>
        <div>
          <label>Gambar Siswa</label>
         <input type="file" name="gambar_siswa" required="" />
        </div>
        <div>
         <button type="submit">Save</button>
        </div>
        </section>
      </form>
  </body>
</html>