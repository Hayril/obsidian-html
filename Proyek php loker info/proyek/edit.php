<?php
$conn = mysqli_connect("localhost", "root", "", "loker_info");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Handle form submission
    $id = $_POST['id'];
    $deskripsi = $_POST['deskripsi'];
    $jurusan = $_POST['jurusan'];
    $kontak_person = $_POST['kontak_person'];

    // Handle file upload if a new photo is uploaded
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        if (move_uploaded_file($tmp_foto, 'uploads/' . $foto)) {
            $foto_path = 'uploads/' . $foto;
            $query = "UPDATE loker SET foto='$foto_path', deskripsi='$deskripsi', jurusan='$jurusan', kontak_person='$kontak_person' WHERE id='$id'";
        } else {
            echo '<div class="alert error">Gagal mengupload foto.</div>';
        }
    } else {
        // Update without changing the photo
        $query = "UPDATE loker SET deskripsi='$deskripsi', jurusan='$jurusan', kontak_person='$kontak_person' WHERE id='$id'";
    }

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<div class="alert success">Loker berhasil diperbarui.</div>';
        header('Location: index.php'); // Redirect to the main page after successful update
        exit;
    } else {
        echo '<div class="alert error">Gagal memperbarui loker.</div>';
    }
}

// Get the job listing details
$id = $_GET['id'];
$query = "SELECT * FROM loker WHERE id='$id'";
$result = mysqli_query($conn, $query);
$loker = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Loker - Loker Info</title>
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
        <h1>Edit Loker</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $loker['id']; ?>">
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required><?php echo $loker['deskripsi']; ?></textarea>
            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="RPL" <?php if ($loker['jurusan'] == 'RPL') echo 'selected'; ?>>RPL</option>
                <option value="AK" <?php if ($loker['jurusan'] == 'AK') echo 'selected'; ?>>AK</option>
                <option value="AP" <?php if ($loker['jurusan'] == 'AP') echo 'selected'; ?>>AP</option>
                <option value="PS" <?php if ($loker['jurusan'] == 'PS') echo 'selected'; ?>>PS</option>
                <option value="Semua" <?php if ($loker['jurusan'] == 'Semua') echo 'selected'; ?>>Semua Jurusan</option>
            </select>
            <label for="kontak_person">Kontak Person:</label>
            <input type="text" id="kontak_person" name="kontak_person" value="<?php echo $loker['kontak_person']; ?>" required>
            <input type="submit" value="Simpan">
            <a href="index.php">Batal</a>
        </form>
    </div>
</body>
</html>
