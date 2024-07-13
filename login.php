<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login - Rental Kamera Mika</title>
    <link rel="stylesheet" href="styles.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <br />
          <a href="index.html"><h1>Rental Kamera Mika</h1></a>
        </nav>
        <br />
      </div>
    </header>
    <section id="login">
      <div class="container">
        <br />
        <h2>Login Admin</h2>
        <form action="process_login.php" method="POST">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
          <button type="submit">Login</button>
        </form>
        <br />
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="social-icons">
          <a href="https://www.facebook.com/?locale=id_ID"
            ><ion-icon name="logo-facebook"></ion-icon
          ></a>
          <a href="https://x.com/?lang=id"
            ><ion-icon name="logo-instagram"></ion-icon
          ></a>
          <a href="https://www.instagram.com/"
            ><ion-icon name="logo-twitter"></ion-icon
          ></a>
        </div>
        <p>Jl. Potronanggan no. 123, Yogyakarta</p>
        <p>&copy; 2024 Rental Kamera Mika. All rights reserved.</p>
        <br />
      </div>
    </footer>
  </body>
</html>
