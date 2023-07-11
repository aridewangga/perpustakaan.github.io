<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Membaca data dari form
    $no = $_POST['no'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $namabuku = $_POST['namabuku'];
    $jenisbuku = $_POST['jenisbuku'];
    $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
    $tanggalpengembalian = $_POST['tanggalpengembalian'];


 $pinjam = simplexml_load_file('peminjam.xml');

 $no =count($pinjam ->peminjaman);

 $user = $pinjam->addChild('peminjaman');
 $user->addChild('no', $no + 1);
 $user->addChild('username', $username);
 $user->addChild('nama', $nama);
 $user->addChild('namabuku', $namabuku);
 $user->addChild('jenisbuku', $jenisbuku);
 $user->addChild('tanggalpeminjaman', $tanggalpeminjaman);
 $user->addChild('tanggalpengembalian',$tanggalpengembalian);
 
 $dom = new DomDocument();
 $dom->preserveWhiteSpace = false;
 $dom->formatOutput = true;
 $dom->loadXML($pinjam->asXML());
 $dom->save('peminjam.xml');
 // Prettify / Format XML and save
 $_SESSION['message'] = 'Buku Berhasil Dipinjam ';
 header('location: ea.php?alert= Berhasil dipinjam');
 }
 else{
 $_SESSION['message'] = 'Fill up add form first';
 header('location: pinjambuku.php?alert=gagal meminjam');
 }
?>