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
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { margin-bottom: 30px; }
        .content-card { background: white; padding: 40px; border-radius: 15px; shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #333; margin-bottom: 25px; }
        .lead { color: #555; }
    </style>
</head>
<body>

    <!-- Navigasyon Menüsü -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Web Projem</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Hakkımda</a>
                <a class="nav-link" href="login.php">Giriş Yap</a>
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
