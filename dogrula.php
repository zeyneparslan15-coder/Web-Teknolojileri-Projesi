<?php
    $email = $_POST['email'];
    $sifre = $_POST['password'];

    // Ödevde istenen kullanıcı adı: g241210000@sakarya.edu.tr
    // Şifre: g241210000 (veya kendi belirlediğin bir şifre)
    
    if ($email == "g241210000@sakarya.edu.tr" && $sifre == "g241210000") {
        echo "<script>alert('Hoşgeldiniz g241210000');</script>";
        header("Refresh: 1; url=index.php");
    } else {
        echo "<script>alert('Hatalı giriş! Login sayfasına yönlendiriliyorsunuz.');</script>";
        header("Refresh: 1; url=login.php");
    }
?>