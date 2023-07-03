<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
    <div class="container">
      <!-- Title -->
    <div class="title"><h1 class="display-4">Selamat datang di halaman Administrator</h1></div>
        <!-- penutup Title -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-white">
          <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="berita.php">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">konfigurasi</a>
                </li>
              </ul>
              <li class="d-flex nav-item">
                  <a class="nav-link" href="#">Log Out</a>
                </li>
              </ul>
            </div>
          </div>  
        </div>
      </nav>
      <!-- Penutup Navbar -->
    </header>
    <main>
      <!-- postingan Berita -->
   <div class="container"></br></br>
    <div class="konten">
      <h5>Berita Terkini</h5>
    </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tgl Postingan</th>
            <th scope="col">Gambar</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Otto</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>Otto</td>
          </tr>
        </tbody>
      </table>
   </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>