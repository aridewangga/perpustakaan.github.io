<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="text-header"><br>
    <h2 class="text-center">LOGIN</h2><br>
  </div>
    <div class="container">
      <div class="row d-flex flex-row justify-content-center px-4 px-md-0">
        <div class="card col-12 col-md-6">
          <div class="card-body">
<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3 mt-5" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="login.php" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="register.php" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="login-action.php" method="POST">
      <div class="text-center mb-3">
        <p>Sign in with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fa-brands fa-facebook"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

      </div>

      <p class="text-center">or:</p>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Username</label>
        <input type="text" name="username" id="loginName" class="form-control" />
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="loginPassword">Password</label>
        <input type="password" name="password" id="loginPassword" class="form-control" />
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <div class="d-flex flex-row justify-content-center">
        <button type="submit" name="login" class="btn btn-primary btn-block mb-4 me-2">Sign In</button>
        <a href="indexhome.php" type="submit" name="back" class="btn btn-primary btn-block mb-4">Kembali</a>
      </div>
      </form>
      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a Account? <a href="register.php">Register</a></p>
      </div>
  </div>
</div>
</div>
</div>
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