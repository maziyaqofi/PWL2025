<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <!-- Maziya Ats Tsaqofi -->
    <!-- 2 Maret 2025 -->
</head>

<body>
    <h2>Form Sederhana</h2>

    <form method="POST">
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>NIM: <input type="text" name="nim" required></label><br>
        <br><button type="submit">Simpan</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h3>Hasil Input:</h3>
        <p>Nama: <?= htmlspecialchars($_POST["nama"]) ?></p>
        <p>NIM: <?= htmlspecialchars($_POST["nim"]) ?></p>
    <?php endif; ?>
</body>
</html>