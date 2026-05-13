<?php
// Gerekli PHP kodları buraya gelebilir
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda - Web Projem</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigasyon Menüsü -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">ZA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">Hakkımda</a>
                    <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                    <a class="nav-link" href="login.php">Giriş Yap</a>
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Ana İçerik -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="content-card shadow-sm">
                    <h1 class="text-center">Hakkımda</h1>
                    <p class="lead">Merhaba! Ben Sakarya Üniversitesi, Bilgisayar Mühendisliği bölümü öğrencisiyim.</p>
                    <p>Bu web sitesi 2025-2026 Bahar Dönemi Web Teknolojileri dersi proje ödevi kapsamında geliştirilmektedir.</p>
                    
                    <h3 class="mt-4">Hobilerim ve İlgi Alanlarım</h3>
                    <ul>
                        <li>Yazılım Geliştirme (C#, PHP)</li>
                        <li>Siber Güvenlik ve Ağ Protokolleri</li>
                        <li>Sosyal Medya Algoritmaları</li>
                    </ul>
                </div> 
            </div> 
        </div> 
    </div> 

    <!-- Bootstrap JS Bağlantısı -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
