<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
    <style>
        /* Tambahkan CSS untuk styling */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20px;
        }

        .profile-box {
            display: inline-block;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            max-width: 700px; /* Lebar maksimal kotak informasi */
            margin: 0 auto; /* Untuk memusatkan kotak */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px; /* Untuk memusatkan gambar */
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }

        .button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            margin-left: 20px;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Profil Mahasiswa</h1>
    <div class="profile-box">
        <div class="profile-picture">
            <img src="img/<?= $_GET["gambar"] ?>" alt="Foto <?= $_GET["nama"] ?>">
        </div>
        <div class="info">
            <div class="label">Nama:</div>
            <?= $_GET["nama"] ?><br><br>
            <div class="label">Nim:</div>
            <?= $_GET["nim"] ?><br><br>
            <div class="label">Email:</div>
            <?= $_GET["email"] ?><br><br>
            <div class="label">Jurusan:</div>
            <?= $_GET["jurusan"] ?><br><br>
        </div>
        <a href="tugas 5b.php" class="button">Kembali ke Daftar Mahasiswa</a>
    </div>
</body>
</html>