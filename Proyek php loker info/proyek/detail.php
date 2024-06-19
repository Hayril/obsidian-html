<?php
session_start();

// Koneksi ke database
require 'koneksi.php';

// Get job ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Query to fetch job details
$query = "SELECT * FROM loker WHERE id = $id";
$result = mysqli_query($conn, $query);
$job = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan Kerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('uploads/kota.jpg');
            background-attachment: fixed;
            background-size: 50%;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .loker-item {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        
        .loker-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }
        
        .loker-item p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            background-color: #007BFF;
            padding: 15px;
            border-radius: 8px;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #007BFF;
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .back-link:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Lowongan Kerja</h1>
        <?php if ($job): ?>
            <div class='loker-item'>
                <img src='<?php echo $job['foto']; ?>' alt='Gambar Lowongan Kerja'>
            </div>
            <div class='loker-details'>
                    <p><strong>Deskripsi:</strong> <?php echo $job['deskripsi']; ?></p>
                    <p><strong>Jurusan:</strong> <?php echo $job['jurusan']; ?></p>
                    <p><strong>Kontak Person:</strong> <?php echo $job['kontak_person']; ?></p>
                </div>
        <?php else: ?>
            <p>Lowongan kerja tidak ditemukan.</p>
        <?php endif; ?>
        <a class="back-link" href="dashboard_user.php">Back to List</a>
    </div>
</body>
</html>
