<?php
   
    $file = simplexml_load_file('perpustakaan.xml');
    

    // Mendapatkan jumlah buku dalam XML
    $totalBuku = count($file->buku);
    ?>
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
<h1 class="text-center mt-4 mb-4">Tambah Buku</h1>   
    <div class="container">
        <div class="row d-flex flex-row justify-content-center px-4 px-md-0">
            <div class="card col-12 col-md-6">
                <div class="card-body">
                    <form action="addpeminjam.php" method="POST" class="px-4 d-flex flex-column justify-content-center">
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="namabuku">Nama Buku</label>
                            <select name="namabuku" id="namabuku">
                            <?php
                                // Menampilkan semua buku dalam elemen <option>
                                for ($i = 0; $i < $totalBuku; $i++) {
                                    $namaBuku = $file->buku[$i]->nama;
                                    echo '<option value="' . $namaBuku . '">' . $namaBuku . '</option>';
                                }
                                ?>
                            </select>  
                        </div>
            
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="jenisbuku">Jenis Buku</label>
                            <input type="text" id="jenisbuku" name="jenisbuku" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="tanggalpeminjaman">Tanggal Peminjaman</label>
                            <input type="date" id="tanggalpeminjaman" name="tanggalpeminjaman" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="tanggalpengembalian">Tanggal Pengembalian</label>
                            <input type="date" id="tanggalpengembalian" name="tanggalpengembalian" class="form-control" />
                        </div>

                        <button type="submit" name= "meminjam" class="btn btn-primary btn-block mb-4 ">Pinjam</button>
                        <a href="home.php" type="home.php" class="btn btn-primary btn-block mb-4 ">Kembali</a></button>
                        <!-- Submit button -->
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
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