<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>ICan-Teen</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css" />
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css" />
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css" />
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css" />
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css" />
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css" />
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css" />
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>

  <body>
    <section class="register-photo">
      <div class="form-container">
        <div class="image-holder"></div>
        <form action="" method="post">
          <h2 class="text-center"><strong>Create</strong> an account.</h2>
          <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
          <div class="mb-3"><input class="form-control" type="text" name="nama" placeholder="Nama" /></div>
          <div class="mb-3"><input class="form-control" type="password" name="password" id="pw1" placeholder="Password" /></div>
          <div class="mb-3"><input class="form-control" type="password" name="password-repeat" id="pw2" placeholder="Password (repeat)" /></div>
          <div class="mb-3">
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" />I agree to the license terms.</label>
            </div>
          </div>
          <div class="mb-3"><input type="submit" class="btn btn-primary d-block w-100" value="Sign Up" name="submit"/></div>
          <a class="already" href="login.php">You already have an account? Login here.</a>
        </form>
      </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <?php
    include 'lib/koneksi.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $sql = mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('$email','$nama','$password')");
        if($sql){
            echo"<script>alert('Berhasil Membuat Akun!');
            window.location.replace('home.html')</script>";
        }else{
            echo"<script>alert('Gagal Membuat Akun!');
            window.location.replace('register.php')</script>";
        }
    }
?>
  </body>
</html>
