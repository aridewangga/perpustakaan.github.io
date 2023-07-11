<?php
session_start();

if (isset($_GET['kode'])) {
    $id = $_GET["kode"];

    // Load file XML
    $users = simplexml_load_file('perpustakaan.xml');

    // Cari elemen yang sesuai dengan NIM (id) yang akan dihapus
    $userToDelete = -1;
    $index = 0;
    foreach ($users->buku as $user) {
        if ($user->kode == $id) {
            $userToDelete = $index;
            break;
        }
        $index++;
    }

    // Jika data ditemukan, hapus
    if ($userToDelete != -1) {
        unset($users->buku[$userToDelete]);

        // Simpan perubahan ke file XML
        file_put_contents('perpustakaan.xml', $users->asXML());
        $_SESSION['message'] = 'Data Buku berhasil dihapus';
    } else {
        $_SESSION['message'] = 'Data Buku tidak ditemukan';
    }

    header('Location: databuku.php');
    exit();
} else {
    $_SESSION['message'] = 'Terjadi kesalahan saat menghapus data';
    header('Location: databuku.php');
    exit();
}
