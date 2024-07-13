<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="styleForm.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <h1>Form Pemesanan Kamera</h1>
      </div>
    </header>
    <section id="order-form">
      <div class="container">
        <form action="process_order.php" method="POST">
          <label for="name">Nama:</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />

          <label for="phone">Telepon:</label>
          <input type="tel" id="phone" name="phone" required />

          <label for="camera">Pilih Kamera:</label>
          <select id="camera" name="camera" required>
            <option value="Canon EOS 5D">Canon EOS 5D</option>
            <option value="Nikon D850">Nikon D850</option>
            <option value="Sony Alpha A7">Sony Alpha A7</option>
          </select>

          <label for="start_date">Tanggal Pengambilan:</label>
          <input type="date" id="start_date" name="start_date" required />

          <label for="end_date">Tanggal Pengembalian:</label>
          <input type="date" id="end_date" name="end_date" required />
          <br /><br />
          <button type="submit">Pesan</button>
        </form>
      </div>
    </section>
    <footer>
      <div class="container">
        <p>&copy; 2024 Rental Kamera Mika. All rights reserved.</p>
        <p>Alamat: Jl. Potronanggan No. 123, Yogyakarta</p>
        <div class="social-icons">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        </div>
      </div>
    </footer>
  </body>
</html>
