<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supplier - LoakPedia</title>
    <link rel="stylesheet" href="./LoakPedia/Logged/frame_285.css" />
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
          <a href="/homelogged"><img src="./LoakPedia/Logged/nadiaartboard_1_1.png" alt="Logo" /></a>
          <h2>
            <span class="registrasi">Registrasi</span>
            <span class="penyedia">Penyedia</span>
          </h2>
          <style>
            .registrasi {
              color: #f0f8ff;
            }

            .penyedia {
              color: black;
            }
          </style>
        </div>

        <div class="profile">
          <div class="profile-image">
            <img
              src="./LoakPedia/Logged/ellipse_79.png"
              alt="Profile Picture"
            />
          </div>
          <div class="profile-name .registrasi">{{ Auth::user()->name }}</div>
        </div>
      </nav>
    </header>
    <step>
      <div class="steptrf active" onclick="changeStep(this)">
        Informasi Toko
      </div>
      <div class="steptrf" onclick="changeStep(this)">Layanan Pengiriman</div>
    </step>
    <div class="wrapper">
      <div class="page active">
        <h2>SUPPLIER</h2>
        <form action="#">
            <div class="input-form">
              <label class="special">Nama Toko</label>
              <input type="text" placeholder="Masukkan Nama Toko Anda" required />
            </div>
            <div class="input-form">
              <label>Alamat</label>
              <input type="text" placeholder="Masukkan Alamat Toko Anda" required />
            </div>
            <div class="input-form-big">
              <label>Deskripsikan Toko Anda</label>
              <textarea placeholder="Deskripsikan Toko Anda" required></textarea>
            </div>
            <div class="input-button button">
              <input type="submit" value="Simpan" />
              <input type="button" value="Lanjut" onclick="nextPage()" />
            </div>
          </form>
      </div>
      <div class="page">
        <h2>JENIS PENGIRIMAN</h2>
        <form action="/supplier">
          <div class="checkbox-options">
            <label>
              <input type="checkbox" />
              <span class="checkbox-custom"></span>
              <span class="checkbox-label">JNE</span>
            </label>
            <label>
              <input type="checkbox" />
              <span class="checkbox-custom"></span>
              <span class="checkbox-label">JNT</span>
            </label>
            <label>
              <input type="checkbox" />
              <span class="checkbox-custom"></span>
              <span class="checkbox-label">KARGO</span>
            </label>
            <label>
              <input type="checkbox" />
              <span class="checkbox-custom"></span>
              <span class="checkbox-label">Binus Express</span>
            </label>
            <label>
              <input type="checkbox" />
              <span class="checkbox-custom"></span>
              <span class="checkbox-label"
                >Pengiriman Cepat Gratis Ongkir?</span
              >
            </label>
          </div>
          <div class="input-button button" id="2ndPage">
            <input type="button" value="Kembali" onclick="previousPage()" />
            <input type="submit" value="Selesai" onclick="nextPage()" />
          </div>
        </form>
      </div>
    </div>
    <script src="./LoakPedia/Logged/script.js"></script>
  </body>
</html>
