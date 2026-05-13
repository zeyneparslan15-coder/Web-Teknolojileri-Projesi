<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım - Zeynep Arslan</title>
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
                    <a class="nav-link active" href="ilgialanlarim.php">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                    <a class="nav-link" href="login.php">Giriş Yap</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <h1 class="text-center mb-5 fw-bold">İlgi Alanlarım & Favori Dizilerim</h1>
        <p class="text-center text-muted mb-5">Bu sayfadaki veriler TV Maze API servisinden canlı olarak çekilmektedir.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // TV Maze API'sinden "Batman" ile ilgili dizileri çekiyoruz (Örnek olarak)
            $url = "https://api.tvmaze.com/search/shows?q=comedy";
            
            // Veriyi çek ve hata kontrolü yap
            $response = @file_get_contents($url);
            
            if ($response !== false) {
                $data = json_decode($response);

                foreach(array_slice($data, 0, 6) as $item) {
                    $image = $item->show->image ? $item->show->image->medium : 'https://via.placeholder.com/210x295?text=Resim+Yok';
                    $name = $item->show->name;
                    $type = $item->show->type;
                    $rating = $item->show->rating->average ? $item->show->rating->average : 'N/A';
                    
                    echo '
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="'.$image.'" class="card-img-top" alt="'.$name.'" style="height: 300px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">'.$name.'</h5>
                                <p class="card-text text-muted">Tür: '.$type.'</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark">Puan: '.$rating.'</span>
                                    <a href="'.$item->show->url.'" target="_blank" class="btn btn-sm btn-outline-dark">İncele</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo '<div class="alert alert-danger w-100">API verisi şu an çekilemiyor. Lütfen internet bağlantınızı kontrol edin.</div>';
            }
            ?>
        </div>
    </main>

    <footer class="text-center py-4 mt-5 border-top text-muted">
        <p>&copy; 2026 Zeynep Arslan</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>