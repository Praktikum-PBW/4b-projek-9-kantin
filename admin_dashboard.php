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
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
      <div class="container">
        <a class="navbar-brand" href="#">ICan-Teen Admin</a
        ><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#">Makanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Minuman</a></li>
            <li class="nav-item"></li>
          </ul>
        </div>
      </div>
    </nav>
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 style="width: 343px">Kantin Mamaku</h2>
          </div>
          <div class="col-md-4 d-flex justify-content-end align-self-start">
            <i class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i
            ><input
              class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field"
              type="search"
              id="search-field"
              style="background-color: #eaeaea; width: 80%; height: 38px; padding: 0px; margin-left: 17px"
              name="search"
            />
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <a class="btn btn-primary d-flex align-items-center align-self-center" role="button" style="height: 38px; background-color: rgb(21, 221, 4)" href="tambah_produk.html">Tambah Produk<i class="fa fa-plus-circle"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Mi Gacoan</td>
                  <td>Makanan</td>
                  <td>10.000</td>
                  <td>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Mi Ayam</td>
                  <td>Makanan</td>
                  <td>12.000</td>
                  <td>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Es Teh Manis</td>
                  <td>Minuman</td>
                  <td>5.000</td>
                  <td>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Teh Manis Anget</td>
                  <td>Minuman</td>
                  <td>4.000</td>
                  <td>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  </body>
</html>
