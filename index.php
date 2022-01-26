<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>table database siswa</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: red;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
            
    </style>
  </head>
  <body>
    <center><h1>Data Siswa</h1><center>
    <center><a href="tambah.php">&nbsp;Tambah Data Siswa</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>nama</th>
          <th>tempat lahir</th>
          <th>warga negara</th>
          <th>alamat</th>
          <th>email</th>
          <th>nomor hp</th>
          <th>asal SMP</th>
          <th>nama ayah</th>
          <th>nama ibu</th>
          <th>penghasilan</th>
          <th>Gambar Siswa</th>
          <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM  tbldata_siswa  ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $row["nama"]; ?></td>
          <td><?php echo $row['tempat lahir']; ?></td>
          <td><?php echo $row['warga negara']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['nomor hp']; ?></td>
          <td><?php echo $row['asal smp']; ?></td>
          <td><?php echo $row['nama ayah']; ?></td>
          <td><?php echo $row['nama ibu']; ?></td>
          <td><?php echo $row['penghasilan']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar siswa']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm(' Apakah Anda yakin akan menghapus data ini?')">Delete</a>
          </td>
       </tr>
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>