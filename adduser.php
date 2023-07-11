<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Membaca data dari form
    $no = $_POST['no'];
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nohandphone = $_POST['nohandphone'];
    $role = $_POST['role'];

 $pengguna = simplexml_load_file('users.xml');

 $no =count($pengguna ->user);

 $user = $pengguna->addChild('user');
 $user->addChild('no', $no + 1);
 $user->addChild('username', $name);
 $user->addChild('password', $password);
 $user->addChild('email', $email);
 $user->addChild('nohandphone', $nohandphone);
 $user->addChild('role', $role);

 $dom = new DomDocument();
 $dom->preserveWhiteSpace = false;
 $dom->formatOutput = true;
 $dom->loadXML($pengguna->asXML());
 $dom->save('users.xml');
 // Prettify / Format XML and save
 $_SESSION['message'] = 'Data berhasil di tambahkan';
 header('location: login.php?alert= Akun Berhasil Dibuat');
 }
 else{
 $_SESSION['message'] = 'Fill up add form first';
 header('location: register.php?alert=gagal tambah data');
 }
?>