<?php
session_start();

// Periksa apakah pengguna telah login sebagai user
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    // Jika tidak, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success text-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">P E R P U S</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="indexhome.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Others
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="daftarriwayat.php">Riwayat Peminjaman</a></li>
              <li><a class="dropdown-item" href="profile.php">Data User</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
        <a class="btn btn-primary" type="button" href="logout.php">Logout</a>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
<!-- caraousel start -->
<!-- caraousel start -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://2.bp.blogspot.com/-yzlk5iUk7lg/VrsOClgqqMI/AAAAAAAAAFg/lVFiBrVp7i8/s1600/Perpustakaan%2BDigital%2BMaktabah%2BKubro%2BSMART%2BLAB.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block mb-1">
      <div class="caption" style="margin-bottom: 30px;">  
        <h3>P E R P U S</h3>
        <p><b>Perpustakaan yang nyaman dan banyak pilihan buku yang dapat anda temukan</b></p>
    </div>
    </div>
  </div>
</div>
  <!-- caraousel end -->
  <!-- card buku start -->
  <h1 class="title text-center">DAFTAR BUKU</h1>
 
 <!-- new card -->
 <div class="container">
   <div class="row">
     <div class="col-3">
       <div class="card" style="width: 15rem;">
       <img src="https://img.wattpad.com/cover/313625049-352-k322974.jpg" class="card-img-top" alt="100 Days In Elevator" style="height: 100%; width: 100%;">
       <div class="card-body">
         <h5 class="card-title text-center">100 Days In Elevator</h5>
         <center><button type="button" class="btn btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#myModal">Lihat Buku</button></center>
       </div>
       </div>
     </div>
     <div class="col-3">
     <div class="card" style="width: 15rem;">
       <img src="https://img.wattpad.com/cover/312584286-352-k370853.jpg" class="card-img-top" alt="The Dancing Plague" style="height: 100%; width: 100%;">
       <div class="card-body">
         <h5 class="card-title text-center">The Dancing Plague</h5>
         <center><button type="button" class="btn btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#myModal3">Lihat Buku</button></center>
       </div>
       </div>
     </div>
     <div class="col-3">
     <div class="card" style="width: 15rem;">
       <img src="https://img.wattpad.com/cover/312518551-352-k315112.jpg" class="card-img-top" alt="The Last Human In Tower" style="height: 100%; width: 100%;">
       <div class="card-body">
         <h5 class="card-title text-center">The Last Human In Tower</h5>
         <center><button type="button" class="btn btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#myModal2">Lihat Buku</button></center>
       </div>
       </div>
     </div>
     <div class="col-3">
     <div class="card" style="width: 15rem;">
       <img src="https://img.wattpad.com/cover/313625049-144-k322974.jpg" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
       <div class="card-body">
         <h5 class="card-title text-center">100 Days In Elevator</h5>
         <center><button type="button" class="btn btn-outline-dark mt-3" data-bs-toggle="modal" data-bs-target="#myModal">Lihat Buku</button></center>
       </div>
       </div>
     </div> 
   </div>
 </div>
 <!-- card end -->
 
 <!-- modal -->
 <!-- modal 1 -->
 <div class="modal fade" id="myModal">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" >
           <div class="container">
             <div class="row">
               <div class="col-md-6">
                 <img src="https://img.wattpad.com/cover/313625049-352-k322974.jpg" alt="100 Days In Elevator">
               </div>
               <div class="col-md-6">
                <h3>100 Days In Elevator</h3>
                <?php 
               $file = simplexml_load_file('perpustakaan.xml');
               
               ?>
               <ul>
                 <li>Kode Buku: <?php echo $file->buku[1]->kode;?></li>
                 <li>Nama Buku: <?php echo $file->buku[1]->nama;?></li>
                 <li>Jenis Buku: <?php echo $file->buku[1]->jenisbuku;?></li>
                 <li>Pengarang: <?php echo $file->buku[1]->pengarang;?></li>
                 <li>Penerbit: <?php echo $file->buku[1]->penerbit;?></li>
                 <li>Tahun Terbit: <?php echo $file->buku[1]->thnterbit;?></li>
               </ul>
               <a href="formpinjam.php" type="button" class="btn btn-primary">Pinjam</a>              
               <a href="https://www.wattpad.com/1236607032-100-days-in-elevator-~prolog~" type="button" class="btn btn-primary">Baca</a>              
             </div> 
         </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 <!-- modal 2 -->
 <div class="modal fade" id="myModal3">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" >
           <div class="container">
             <div class="row">
               <div class="col-md-6">
                 <img src="https://img.wattpad.com/cover/312584286-352-k370853.jpg" alt="The Dancing Plague ">
               </div>
               <div class="col-md-6">
                <h3>The Dancing Plague</h3>
                <?php 
               $file = simplexml_load_file('perpustakaan.xml');
               
               ?>
               <ul>
                 <li>Kode Buku: <?php echo $file->buku[0]->kode;?></li>
                 <li>Nama Buku: <?php echo $file->buku[0]->nama;?></li>
                 <li>Jenis Buku: <?php echo $file->buku[0]->jenisbuku;?></li>
                 <li>Pengarang: <?php echo $file->buku[0]->pengarang;?></li>
                 <li>Penerbit: <?php echo $file->buku[0]->penerbit;?></li>
                 <li>Tahun Terbit: <?php echo $file->buku[0]->thnterbit;?></li>
               </ul>
               <a href="formpinjam.php" type="button" class="btn btn-primary">Pinjam</a>              
               <a href="https://www.wattpad.com/1232737170-the-dancing-plague-bab-1-mengembara-ke-strasbourg" type="button" class="btn btn-primary">Baca</a>              
             </div> 
         </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 <!-- modal 3 -->
 <div class="modal fade" id="myModal2">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" >
           <div class="container">
             <div class="row">
               <div class="col-md-6">
                 <img src="https://img.wattpad.com/cover/312518551-352-k315112.jpg" alt="The Last Human In Tower ">
               </div>
               <div class="col-md-6">
                <h3>The Last Human In Tower</h3>
                <?php 
               $file = simplexml_load_file('perpustakaan.xml');
               
               ?>
               <ul>
                 <li>Kode Buku: <?php echo $file->buku[2]->kode;?></li>
                 <li>Nama Buku: <?php echo $file->buku[2]->nama;?></li>
                 <li>Jenis Buku: <?php echo $file->buku[2]->jenisbuku;?></li>
                 <li>Pengarang: <?php echo $file->buku[2]->pengarang;?></li>
                 <li>Penerbit: <?php echo $file->buku[2]->penerbit;?></li>
                 <li>Tahun Terbit: <?php echo $file->buku[2]->thnterbit;?></li>
               </ul>
               <a href="formpinjam.php" type="button" class="btn btn-primary">Pinjam</a>              
               <a href="https://www.wattpad.com/1232494856-the-last-human-in-tower-chap-i-dimana-ini" type="button" class="btn btn-primary">Baca</a>              
             </div> 
         </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  <!-- card buku end -->
  
<footer class="bg-light text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #28A745">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">DTLY</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>