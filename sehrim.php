<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İstanbul - Zeynep Arslan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
                </div>
            </div>
        </div>
    </nav>
    <main class="container my-5">
        <h1 class="text-center mb-4 display-4 fw-bold">Doğduğum Şehir: İstanbul</h1>

        <div id="istanbulSlider" class="carousel slide shadow mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200" class="d-block w-100" alt="Galata">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Galata Kulesi</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b" class="d-block w-100" alt="Kız Kulesi">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Kız Kulesi</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1527838832700-5059252407fa" class="d-block w-100" alt="Ayasofya">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Ayasofya</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1449034446853-66c86144b0ad" class="d-block w-100" alt="Boğaz Köprüsü">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Boğaz Köprüsü</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#istanbulSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#istanbulSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <article class="city-content">
            <h3>İstanbul'un Tarihi ve Benim İçin Önemi</h3>
            <p>15 Mayıs 2004 tarihinde bu büyülü şehirde dünyaya geldim. İstanbul benim için sadece bir şehir değil; Asya ve Avrupa'yı birbirine bağlayan koca bir tarih.</p>
            <p>Roma, Bizans ve Osmanlı gibi imparatorluklara ev sahipliği yapmış bu topraklar, her sokağında farklı bir hikaye barındırıyor. Galata'dan Boğaz'a kadar her yerin bendeki yeri çok ayrı.</p>
        </article>
    </main>

    <footer class="text-center py-4 mt-5 border-top text-muted">
        <p>&copy; 2026 Zeynep Arslan</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>