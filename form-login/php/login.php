<?php
//1. hubungkan koneksi dan file function


//2. cek data ketika tombol kirim di klik

  // 3. tangkap semua element input (username dan password)
 
  // // $result = "nama : $username dan password : $password";
  // // echo $result;

  //4. (variabel) lakukan query SELECT untuk menampilkan data username secara spesifik
  
  //5. cek apakah didalam query tersebut ada data username yang tersimpan
  // mysqli_num_rows($hasil_querynya)


    //6. (variabel) ubah hasil tersebut menjadi array assoc

  
    //7. cek password menggunakan password_verify('password', field pass di dbms)
    // beri tahu user bahwa user berhasil login
    // arahkan user ke file result.php
    // exit;

//8. (variabel) config errornya bernilai true

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/system.css" />
  </head>

  <body>
      <!-- == -->
    <form action="" method="post">
        <div class="segment">
            <h1>Login</h1>
        </div>
        <!-- kalau error tampilkan tag p berikut -->
        <?php if(isset($error)) { ?>
            <!-- <p style="font-style:italic; color:red;">username/password tidak valid</p> -->
          <script>
              alert('username/password tidak valid')
          </script>
         <?php } ?> 
        

      <label>
        <input type="text" id="username" placeholder="Username" required />
      </label>
      <label>
        <input type="password" id="password" placeholder="Password" required/>
      </label>
      <button class="red" type="submit"><ion-icon name="lock-closed-outline"></ion-icon> Sign In</button>
      <div class="asking">
          <p>Don't have an account ? <a href="register.php">Register</a></p>
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
