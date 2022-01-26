<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
  $nama   = $_POST['nama'];
  $tempat_lahir     = $_POST['tempat lahir'];
  $warga_negara    = $_POST['warga negara'];
  $almat   = $_POST['almat'];
  $email   = $_POST['email'];
  $nomor_hp   = $_POST['nomor hp '];
  $asal_smp   = $_POST['asal smp'];
  $nama_ayah   = $_POST['nama ayah'];
  $nama_ibu   = $_POST['nama ibu'];
  $penghasilan   = $_POST['penghasilan'];
  $gambar_siswa = $_FILES['gambar siswa']['name'];

//cek dulu jika ada gambar produk jalankan coding ini
if($gambar_siswa != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.', $gambar_siswa); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar siswa']['tmp_name'];
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_siswa; //menggabungkan angka acak dengan nama file sebenarnya       
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
         // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
         $query = "INSERT INTO produk (nama, tempat lahir, warga negara, almat,email,nomor hp,asal smp,nama ayah,nama ibu,penghasilan,gambar siswa) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";         



