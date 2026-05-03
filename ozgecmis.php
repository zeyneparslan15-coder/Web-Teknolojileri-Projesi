<?php
// PHP kodların varsa buraya gelecek
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: sans-serif; }
        .cv-header { background: #343a40; color: white; padding: 2rem; border-radius: 8px; }
        .section-title { border-bottom: 2px solid #0d6efd; padding-bottom: 10px; color: #0d6efd; }
        .hobi-tag { background: #e9ecef; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; margin: 5px; display: inline-block; }
    </style>
</head>
<body>

    <!-- Navigasyon Menüsü -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">CV</a>
        </div>
    </nav>

    <main class="container my-5">
        <article class="bg-white p-4 p-md-5 shadow rounded">
            
            <!-- Üst Bilgi Alanı (Header) -->
            <header class="cv-header text-center shadow-sm mb-5">
                <h1 class="display-4 fw-bold">Zeynep Arslan</h1>
                <p class="lead">Bilgisayar Mühendisliği Öğrencisi</p>
                <small>15 Mayıs 2004 | İstanbul Doğumlu</small>
            </header>

            <div class="row">
                <div class="col-md-6">
                    <!-- Eğitim Bölümü -->
                    <section class="mb-5">
                        <h3 class="section-title">Eğitim Bilgileri</h3>
                        <div class="mb-3">
                            <h5 class="fw-bold">Sakarya Üniversitesi</h5>
                            <p class="text-muted mb-1">Bilgisayar Mühendisliği (Lisans)</p>
                            <small>2024 - Devam Ediyor</small>
                        </div>
                    </section>
                </div>

                <div class="col-md-6">
                    <!-- Yetenekler Bölümü -->
                    <section class="mb-5">
                        <h3 class="section-title">Teknik Yetenekler</h3>
                        <p>C#, PHP, HTML5, CSS3, Bootstrap 5 ve GitHub Sürüm Kontrol Sistemleri üzerine çalışmalar yapmaktayım.</p>
                    </section>
                </div>
            </div>

            <!-- Hobiler Bölümü -->
            <section>
                <h3 class="section-title">İlgi Alanları & Hobiler</h3>
                <div class="d-flex flex-wrap">
                    <span class="hobi-tag">Şarkı Söylemek</span>
                    <span class="hobi-tag">Tenis Oynamak</span>
                    <span class="hobi-tag">Spor Yapmak</span>
                    <span class="hobi-tag">Kitap Okumak</span>
                    <span class="hobi-tag">Yeni Diller Öğrenmek</span>
                </div>
            </section>

        </article> <!-- Article burada kapanmalı -->
    </main> <!-- Main burada kapanmalı -->

    <!-- Sayfa Altı (Footer) -->
    <footer class="text-center py-4 text-muted">
        <p>&copy; 2026 Zeynep Arslan - Tüm Hakları Saklıdır.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
