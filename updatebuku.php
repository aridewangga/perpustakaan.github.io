<?php
session_start();

if (isset($_POST['edit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenisbuku = $_POST['jenisbuku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thnterbit = $_POST['thnterbit'];

    // Load file XML
    $file = simplexml_load_file('perpustakaan.xml');

    // Cari elemen yang sesuai dengan kode (kode) yang akan diedit
    $userToEdit = null;
    foreach ($file->buku as $user) {
        if ($user->kode == $kode) { // Mengubah 'kode' menjadi 'id'
            $userToEdit = $user;
            break;
        }
    }

    // Jika data ditemukan, edit
    if ($userToEdit != null) {
        $userToEdit->nama = $nama;
        $userToEdit->jenisbuku = $jenisbuku;
        $userToEdit->pengarang = $pengarang;
        $userToEdit->penerbit = $penerbit;
        $userToEdit->thnterbit = $thnterbit;

        // Simpan perubahan ke file XML
        $file->asXML('perpustakaan.xml');

        $_SESSION['message'] = 'Data Buku berhasil diubah';
    } else {
        $_SESSION['message'] = 'Data Buku tidak ditemukan';
    }

    header('Location: databuku.php');
    exit();
}
?>


