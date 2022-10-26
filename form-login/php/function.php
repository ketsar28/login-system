<?php
//1. koneksi ke database / require ke file koneksi

// == fungsi register ==

//2. buat function register yang memiliki 1 parameter

    //3. tangkap koneksi global
    
    //4. tangkap data inputan username dan password dan lakukan config
    // data yang diinputkan di username harus huruf kecil semua
    // gunakan fungsi php dan terapkan fungsi tsb supaya seakan akan sebuah string ('') 
    // used : strtolower(), stripslashes(), mysqli_real_escape_string($koneksi, $data_yang_diinputkan)
    

    //5. buat query SELECT untuk mencari data username yang spesifik berdasarkan hasil inputan  
    
    //6. jika usernamenya sama dengan yang ada di database, jangan beri masuk, ubah terlebih dahulu kedalam array associative hasil querynya
    // beri pesan bahwa username tersebut sudah ada
    // dan kembalikan nilai false 
    

    //7. jika password tidak sama dengan konfirmasinya, jangan beri masuk 
    // beri pesan bahwa password tersebut tidak cocok
    // dan kembalikan nilai false
    
    //8. convert password supaya tidak dibaca oleh sembarangan orang, menggunakan password_hash($data_passowrd, PASSWORD_DEFAULT)
    

    //9. jika berhasil, lakukan query insert supaya data dimasukan ke database, note : untuk field id dikosongkan datanya
   

    //10. kembalikan hasilnya menggunakan mysqli_affected_rows($conn)


?>