<?php
session_start();

// Koneksi ke database
require 'koneksi.php';

// Fungsi untuk memeriksa login admin
function check_admin_login($username, $password) {
    global $conn;

    $stmt = $conn->prepare("SELECT admin_id, password FROM ardi WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            return $id;
        }
    }

    return false;
}

// Cek jika ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek login admin
    $admin_id = check_admin_login($username, $password);
    if ($admin_id) {
        // Atur session
        $_SESSION['logged_in'] = true;
        $_SESSION['admin_id'] = $admin_id;

        // Redirect ke halaman admin dashboard
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('uploads/kota.jpg');
            background-size: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007BFF; /* Warna biru */
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 500px;
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
            border: 1px solid #007BFF; /* Warna border biru */
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF; /* Warna tombol biru */
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3; /* Warna biru yang lebih gelap saat tombol dihover */
        }

        p {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            color: #007BFF; /* Warna biru */
            display: block;
            text-align: center;
            margin-top: 10px;
            background-color: #f2f2f2; /* Warna latar belakang abu-abu */
            padding: 10px; /* Menambahkan padding agar tautan lebih terlihat */
            border-radius: 6px; /* Memberikan sudut yang melengkung pada tautan */
        }

        a:hover {
            text-decoration: underline;
            color: white; /* Warna biru yang lebih gelap saat dihover */
            background-color: #007BFF; /* Warna latar belakang abu-abu yang lebih terang saat dihover */
        }
    </style>
</head>
<body>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post">
        <h1>Login Admin</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
        <a href="add_admin.php">Daftar Admin Baru</a>
        <a href="home.php">Kembali</a> <!-- Tombol baru untuk halaman pengguna -->
    </form>
</body>
</html>