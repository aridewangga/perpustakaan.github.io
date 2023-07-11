<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
    <br><br>
    <div class="text-header">
        <h2 class="text-center">REGISTER</h2><br>
    </div>
    <!-- Pills navs -->
    <div class="container">
        <div class="row d-flex flex-row justify-content-center px-4 px-md-0">
            <div class="card col-12 col-md-6">
                <div class="card-body">
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3 mt-5" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="login.php" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="register.php" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="adduser.php" method="POST">
      <div class="text-center mb-3"><br>
        <p>Have a Account? <a href="login.php">Login</a></p>
      </div><br>
      <!-- Username -->
      <div class="form-outline mb-4">
          <label class="form-label" for="loginName">Username</label>
        <input type="text" name="username" id="loginName" class="form-control" />
      </div>
      <!-- Password -->
      <div class="form-outline mb-4">
          <label class="form-label" for="loginPassword">Password</label>
        <input type="password" name="password" id="loginPassword" class="form-control" />
      </div>
      <!-- Email -->
      <div class="form-outline mb-4">
          <label class="form-label" for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" />
      </div>
      <!-- No Handphone -->
      <div class="form-outline mb-4">
          <label class="form-label" for="nohandphone">No Handphone</label>
        <input type="text" name="nohandphone" id="nohandphone" class="form-control" />
      </div>
      <!-- Jenis Akun -->
      <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role" value="user">
        <label class="form-check-label" for="exampleRadios2">User</label>
      </div>
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
        </div>
        <br>
      <!-- Submit button -->
      <center><div class= "form-outline" >
      <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Sign In</button>
      </div></center>
    </form>
  </div>
</div>
<!-- Pills content -->

<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #28A745">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">DTLY</a>
  </div>
  <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
</form>
  