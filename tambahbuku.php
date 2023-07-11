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
                    <form action="addbuku.php" method="POST" class="px-4 d-flex flex-column justify-content-center">
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="kode">Kode Buku</label>
                            <input type="text" id="kode" name="kode" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="nama">Nama Buku</label>
                            <input type="text" id="nama" name="nama" class="form-control" />
                        </div>
            
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="jenisbuku">Jenis Buku</label>
                            <input type="text" id="jenisbuku" name="jenisbuku" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="pengarang">Pengarang</label>
                            <input type="text" id="pengarang" name="pengarang" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="penerbit">Penerbit</label>
                            <input type="text" id="penerbit" name="penerbit" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="thnterbit">Tahun Terbit</label>
                            <input type="text" id="thnterbit" name="thnterbit" class="form-control" />
                        </div>

                        <button type="submit" name= "tambah" class="btn btn-primary btn-block mb-4 ">Save </button>
                        <a href="databuku.php" type="databuku.php" class="btn btn-primary btn-block mb-4 ">Kembali</a></button>
                        <!-- Submit button -->
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
   
<footer class="bg-light text-center text-lg-start fixed-bottom">
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