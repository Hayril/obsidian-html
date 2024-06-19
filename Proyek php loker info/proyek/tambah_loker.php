<?php
$conn = mysqli_connect("localhost", "root", "", "loker_info");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Handle form submission
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $deskripsi = $_POST['deskripsi'];
    $jurusan = $_POST['jurusan'];
    $kontak_person = $_POST['kontak_person'];

    // Upload foto
    if (move_uploaded_file($tmp_foto, 'uploads/' . $foto)) {
        // Insert data into the database
        $query = "INSERT INTO loker (foto, deskripsi, jurusan, kontak_person) VALUES ('uploads/$foto', '$deskripsi', '$jurusan', '$kontak_person')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '<div class="alert success">Loker berhasil ditambahkan.</div>';
            header('Location: index.php'); // Redirect to the main page after successful addition
            exit;
        } else {
            echo '<div class="alert error">Gagal menambahkan loker.</div>';
        }
    } else {
        echo '<div class="alert error">Gagal mengupload foto.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Loker - Loker Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('uploads/kota.jpg');
            background-size: 50%;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="file"],
        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            margin-bottom: 30px;
        }

        input[type="submit"],
        a {
            display: inline-block;
            width: 45%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            background-color: #ccc;
            color: #000;
        }

        a:hover {
            background-color: #ddd;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-weight: bold;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Loker</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" required>
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="RPL">RPL</option>
                <option value="AK">AK</option>
                <option value="AP">AP</option>
                <option value="PS">PS</option>
                <option value="Semua">Semua Jurusan</option>
            </select>
            <label for="kontak_person">Kontak Person:</label>
            <input type="text" id="kontak_person" name="kontak_person" required>
            <input type="submit" value="Kirim">
            <a href="index.php">Batal</a>
        </form>
    </div>
</body>
</html>
