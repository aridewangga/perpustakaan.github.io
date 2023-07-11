<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Load XML data
    $xml = simplexml_load_file('users.xml');

    // Check login
    foreach ($xml->user as $user) {
        if ($user->username == $username && $user->password == $password) {
            // menyimpan username dan role serta string digunakan 
            // untuk mengambil nilai pada xml users dengan tipe data string
            $_SESSION['username'] = (string)$user->username;
            $_SESSION['role'] = (string)$user->role;

            // menghubungkan halaman pada setiap role yang berbeda
            if ($user->role == 'admin') {
                header('Location: admin.php');
                exit;
            } elseif ($user->role == 'user') {
                header('Location: home.php');
                exit;
            }
        }
    }

    // ketika login gagal, maka akan kembali ke halaman login
    header('Location: login.php?error=1');
    exit;
}
?>
