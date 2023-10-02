<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supplier - LoakPedia</title>
    <link rel="stylesheet" href="./LoakPedia/supplier/frame_285.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <a href="/homelogged"><img src="./LoakPedia/supplier/nadiaartboard_1_1.png" alt="Logo" /></a>
          <h2>
            <span class="penyedia">Penyedia</span>
          </h2>
          <style>
            .penyedia {
              color: #f0f0f0;
            }
          </style>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="sidebar">
        <ul>
          <li><a href="/supplier">Menu</a></li>
          <li><a href="/upload">Produk</a></li>
          <li><a href="/upload">Pesanan</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <br>

      <div class="content">
        <div class="content-header">
          <div class="profile">
            <div class="profile-image" id="profile-img">
              <img src="./LoakPedia/supplier/ellipse_79.png" alt="Profile Picture" />
            </div>
            <h class="profile-name"
              ><b> {{ Auth::user()->name }}</b> <br>
              Pengikut 0 &emsp; Diikuti 0
            </h>
          </div>
          <br>
        </div>

        <div class="content-body">
          <h1>Belum Mempunyain Produk</h1>
          <p>Silahkan Unggah Produk Anda</p>
          <a href="/upload" class="green-button">Unggah Sekarang</a>
        </div>
      </div>
    </div>
    <script src="./LoakPedia/supplier/script.js"></script>
  </body>
</html>
