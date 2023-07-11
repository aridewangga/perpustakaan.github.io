<?php
session_start();

if (isset($_GET['no'])) {
    $id = $_GET["no"];

    // Load file XML
    $pengguna = simplexml_load_file('users.xml');

    // Cari elemen yang sesuai dengan NIM (id) yang akan dihapus
    $userToDelete = -1;
    $index = 0;
    foreach ($pengguna->user as $user) {
        if ($user->no == $id) {
            $userToDelete = $index;
            break;
        }
        $index++;
    }

    // Jika data ditemukan, hapus
    if ($userToDelete != -1) {
        unset($pengguna->user[$userToDelete]);

        // Simpan perubahan ke file XML
        file_put_contents('users.xml', $pengguna->asXML());
        $_SESSION['message'] = 'Data Buku berhasil dihapus';
    } else {
        $_SESSION['message'] = 'Data Buku tidak ditemukan';
    }

    header('Location: admin.php');
    exit();
} else {
    $_SESSION['message'] = 'Terjadi kesalahan saat menghapus data';
    header('Location: admin.php');
    exit();
}
