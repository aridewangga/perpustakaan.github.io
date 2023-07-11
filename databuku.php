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
            <a class="nav-link" href="admin.php">Data Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="peminjaman.php">Data Peminjaman</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Others
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item nav-link active" href="databuku.php">Data Buku</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
        <a href="logout.php" class="btn btn-primary" type="button">Logout</a>
      </div>
    </div>
  </nav><br>
  <!-- Navbar End -->

  <!-- tabel start -->
<div class="container"> 
  <h1 class="page-header text-center mt-2 mb-5">DAFTAR BUKU</h1>
  <center><a href="tambahbuku.php" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus mb-5 mt-4"></span>Tambah Buku</a></center>
        <?php 
        session_start();
        if(isset($_SESSION['message'])){
        ?> 
        <div class="alert alert-info text-center" style="margin-top:20px;">
        <?php echo $_SESSION['message']; ?>
        </div>
            <?php
            unset($_SESSION['message']);
        }
        ?>
  <table class="table table-bordered table-striped mt-5" style="margin-top:20px;" >
    <thead>
      <th scope="col">No</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Jenis Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Opsi</th>
    </thead>
    <tbody>
        <?php 
        $file = simplexml_load_file('perpustakaan.xml');
        foreach($file->buku as $row){
        ?>
        <tr>
            <td><?php echo $row-> no; ?></td>
            <td><?php echo $row-> kode; ?></td>
            <td><?php echo $row-> nama; ?></td>
            <td><?php echo $row-> jenisbuku; ?></td>
            <td><?php echo $row-> pengarang; ?></td>
            <td><?php echo $row-> penerbit; ?></td>
            <td><?php echo $row-> thnterbit; ?></td>
            <td>
            <a href="editbuku.php?kode=<?php echo $row->kode;?>" data-toggle="modal" class="btn btn-success btn-sm"> 
            <span class="glyphicon glyphicon-edit"></span>Edit</a>

            <a href="deletebuku.php?kode=<?php echo $row->kode;?>" data-toggle="modal" class="btn btn-danger btn-sm">
            <span class="glyphicon glyphicon-trash"></span>Delete</a>
            </td>
        </tr>
   <?php
    }
    ?>
    </tbody>
    </table>
    </div>
  <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #28A745">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">DTLY</a>
  </div>
  <!-- Copyright -->
</footer>
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>