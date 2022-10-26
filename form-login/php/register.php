<?php
//1. hubungkan koneksi dan file function


//2. jika tombol kirim di klik lakukan sesuatu

  
  //3. jika nilai yang dikembalikan oleh function register($_POST) true(1)tampilkan pesan menggunakan pop-up box
  // test : var_dump(mysqli_affected_rows($conn));
  
  
  //4. kalau false kembalikan errornya
  //test :  var_dump(mysqli_affected_rows($conn));


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="../css/system.css" />
  </head>
  <body>
    <form action="" method="post">
      <div class="segment">
        <h1>Register</h1>
      </div>

      <label>
        <input type="text" id="username" placeholder="Username" required/>
      </label>
      <label>
        <input type="password" id="password" placeholder="Password" required/>
      </label>
      <label>
        <input type="password" id="cpass" placeholder="Confirm Password" required />
      </label>
      <button class="red" type="submit"><ion-icon name="lock-closed-outline"></ion-icon> Sign Up</button>
     <div class="asking">
       <p>Already have an account ? <a href="login.php">Login</a></p>
     </div>

      <div class="segment">
        <button class="unit" type="button"><ion-icon name="logo-google"></ion-icon></button>
        <button class="unit" type="button"><ion-icon name="logo-facebook"></ion-icon></button>
        <button class="unit" type="button"><ion-icon name="logo-instagram"></ion-icon></button>
      </div>
    </form>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
