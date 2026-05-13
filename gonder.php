<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Alındı - Zeynep Arslan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="result-card shadow">
        <h2 class="text-center mb-4 text-success">Mesajınız Gönderildi!</h2>
        <hr>
        <p><strong>Ad Soyad:</strong> <?php echo $_POST['name']; ?></p>
        <p><strong>E-posta:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Mesajınız:</strong> <?php echo $_POST['message']; ?></p>
        <hr>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-primary">Ana Sayfaya Dön</a>
        </div>
    </div>

</body>
</html>