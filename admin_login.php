<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ICan-Teen</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-clean">
        <form method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="color: rgb(86,198,198);"><i class="icon ion-fork"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><input class="btn btn-primary d-block w-100" role="button" style="margin-left: 0;" name="submit" type="submit" value="Log In" /></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <?php 
    if(isset($_POST['submit'])){
        session_start();

        include 'lib/koneksi.php';

        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = mysqli_query($koneksi,"select * from admin where email='$email' and password='$password'");
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:admin_dashboard.html");
        }else{
            echo"<script>alert('Gagal Login!');
            window.location.replace('admin_login.php')</script>";
        }
    }
?>
</body>

</html>