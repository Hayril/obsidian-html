<?php
session_start();

// Check if user is logged in
// if (!isset($_SESSION['logged_in'])) {
//     header('Location: login.php');
//     exit;
// }

// Koneksi ke database
require 'koneksi.php';

// Proses tambah pengguna
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO ardi (username, password) VALUES ( ?, ?)");
    $stmt->bind_param("ss", $username, $password); 

    if ($stmt->execute()) {
        $success_message = "admin berhasil ditambahkan.";
        header('Location: login.php');
    } else {
        $error_message = "Gagal menambahkan pengguna. Username mungkin sudah digunakan.";
    }

    $stmt->close();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin Baru</title>
    <style>
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('uploads/kota.jpg');
    background-size: 50%;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #007BFF; /* Warna biru yang menarik perhatian */
}

label {
    display: block;
    margin-bottom: 10px;
    color: #555;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: border-color 0.3s; /* Transisi saat input berfokus */
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007BFF; /* Warna biru saat input berfokus */
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007BFF; /* Warna biru yang menarik perhatian */
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3; /* Warna biru yang lebih gelap saat tombol dihover */
}

a {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #007BFF;
    text-decoration: none;
    transition: color 0.3s; /* Transisi saat tautan dihover */
}

a:hover {
    color: #0056b3; /* Warna biru yang lebih gelap saat tautan dihover */
}

    </style>
</head>
<body>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post">
        <h1>Tambah Admin Baru</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Tambah Admin</button>
        <a href="login.php">Batal</a>
    </form>
</body>
</html>
