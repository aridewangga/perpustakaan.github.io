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
      <h4 class="title">P E R P U S</h4>
      <form class="d-flex">
        <a class="btn btn-primary" type="button" href="login.php">Login</a>
      </form>
      </div>
    </div>
</nav>
  <!-- Navbar End -->
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
              <a href="login.php" type="button" class="btn btn-primary">Pinjam</a>              
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
              <a href="login.php" type="button" class="btn btn-primary">Pinjam</a>              
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
              <a href="login.php" type="button" class="btn btn-primary">Pinjam</a>              
              <a href="login.php" type="button" class="btn btn-primary">Baca</a>              
            </div> 
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>