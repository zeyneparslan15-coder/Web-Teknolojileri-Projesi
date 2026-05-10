<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Zeynep Arslan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .contact-form { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); margin-top: 50px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">ZA</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkımda</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link active" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Giriş Yap</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="contact-form">
                    <h2 class="text-center mb-4 fw-bold">Bana Ulaşın</h2>
                    <form id="contactForm" action="gonder.php" method="POST" onsubmit="return formKontrol()">
                        <div class="mb-3">
                            <label class="form-label">Adınız Soyadınız</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Zeynep Arslan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-posta Adresiniz</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="isim@ornek.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mesajınız</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Mesajınızı buraya yazın..."></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Gönder</button>
                            <button type="reset" class="btn btn-outline-danger mt-2 btn-sm">Temizle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formKontrol() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            if (name == "" || email == "" || message == "") {
                alert("Lütfen tüm alanları eksiksiz doldurun!");
                return false;
            }
            
            var emailCheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailCheck.test(email)) {
                alert("Lütfen geçerli bir e-posta adresi girin!");
                return false;
            }

            return true;
        }
    </script>

</body>
</html>