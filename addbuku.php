<?php
 session_start();
 if(isset($_POST['tambah'])){

 $users = simplexml_load_file('perpustakaan.xml');
 
 $no = count($users->buku);

 $user = $users->addChild('buku');
 $user->addChild('no', $no + 1 );
 $user->addChild('kode', $_POST['kode']);
 $user->addChild('nama', $_POST['nama']);
 $user->addChild('jenisbuku', $_POST['jenisbuku']);
 $user->addChild('pengarang', $_POST['pengarang']);
 $user->addChild('penerbit', $_POST['penerbit']);
 $user->addChild('thnterbit', $_POST['thnterbit']);
 $dom = new DomDocument();
 $dom->preserveWhiteSpace = false;
 $dom->formatOutput = true;
 $dom->loadXML($users->asXML());
 $dom->save('perpustakaan.xml');
 // Prettify / Format XML and save
 $_SESSION['message'] = 'Buku berhasil di tambahkan';
 header('location: databuku.php');
 }
 else{
 $_SESSION['message'] = 'Fill up add form first';
 header('location: tambahbuku.php?alert= gagal menambah buku');
 }
?>