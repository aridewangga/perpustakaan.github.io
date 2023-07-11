<?php
session_start();

if (isset($_POST['ganti'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $namabuku = $_POST['namabuku'];
    $jenisbuku = $_POST['jenisbuku'];
    $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
    $tanggalpengembalian = $_POST['tanggalpengembalian'];
    // Load file XML
    $file = simplexml_load_file('peminjam.xml');

    // Cari elemen yang sesuai dengan kode (kode) yang akan diedit
    $userToEdit = null;
    foreach ($file->peminjaman as $user) {
        if ($user->username == $username) { // Mengubah 'kode' menjadi 'id'
            $userToEdit = $user;
            break;
        }
    }

    // Jika data ditemukan, edit
    if ($userToEdit != null) {
        $userToEdit->username = $username;
        $userToEdit->nama = $nama;
        $userToEdit->namabuku = $namabuku;
        $userToEdit->jenisbuku = $jenisbuku;
        $userToEdit->tanggalpeminjaman = $tanggalpeminjaman;
        $userToEdit->tanggalpengembalian = $tanggalpengembalian;

        // Simpan perubahan ke file XML
        $file->asXML('peminjam.xml');

        $_SESSION['message'] = 'Data Buku berhasil diubah';
    } else {
        $_SESSION['message'] = 'Data Buku tidak ditemukan';
    }

    header('Location: daftarriwayat.php');
    exit();
} else {
    // Load data peminjaman berdasarkan username
    $username = $_GET['username'];
    $file = simplexml_load_file('peminjam.xml');
    $userToEdit = null;
    foreach ($file->peminjaman as $user) {
        if ($user->username == $username) {
            $userToEdit = $user;
            break;
        }
    }
}

?>
