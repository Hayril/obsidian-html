<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

// Koneksi ke database
require 'koneksi.php';

// Proses Delete Data
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM loker WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    header("Location: index.php");
    exit;
}

// Tentukan jumlah item per halaman
$items_per_page = 3;

// Tentukan halaman saat ini
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $items_per_page;

// Hitung jumlah total item
$total_items_query = "SELECT COUNT(*) AS count FROM loker";
$total_items_result = mysqli_query($conn, $total_items_query);
$total_items_row = mysqli_fetch_assoc($total_items_result);
$total_items = $total_items_row['count'];

// Hitung jumlah total halaman
$total_pages = ceil($total_items / $items_per_page);

// Ambil data untuk halaman saat ini
$query = "SELECT * FROM loker LIMIT $items_per_page OFFSET $offset";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-size: 60%;
        background-attachment: fixed;
        background-image: url('uploads/kota.jpg');
        color: #333;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .navbar {
        background-color: #007BFF;
        color: #fff;
        display: flex;
        align-items: center;
        padding: 10px 20px;
    }

    .navbar a {
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }

    .container {
        width: 90%;
        max-width: 900px;
        margin: 80px auto 20px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 2em;
        margin: 0;
        color: #333;
    }

    .loker-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 8px;
        background-color: rgba(249, 249, 249, 0.9);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .loker-item img {
        max-width: 100px;
        height: auto;
        border-radius: 8px;
        margin-right: 15px;
    }

    .loker-item div {
        flex-grow: 1;
    }

    .loker-item p {
        margin: 0 0 10px;
        color: #555;
    }

    .loker-item .actions {
        margin-top: 10px;
    }

    .actions a {
        display: inline-block;
        margin-right: 10px;
        padding: 8px 12px;
        color: #fff;
        background-color: #007BFF;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .actions a:hover {
        background-color: #0056b3;
    }

    .actions a.delete {
        background-color: #d9534f;
    }

    .actions a.delete:hover {
        background-color: #c9302c;
    }
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        margin: 0 5px;
        padding: 8px 12px;
        color: #007BFF;
        text-decoration: none;
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination a.active {
        background-color: #007BFF;
        color: #fff;
        border-color: #007BFF;
    }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="dashboard_user.php">Dashboard</a>
        <a href="tambah_loker.php">Tambahkan Loker</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <div class="header">
            <h1>Dashboard Admin</h1>
        </div>
        <hr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='loker-item'>";
                echo '<img src="' . $row['foto'] . '" alt="Gambar Lowongan Kerja">';
                echo "<div>";
                echo "<p><strong>ID:</strong> " . $row['id'] . "</p>";
                echo "<p><strong>Deskripsi:</strong> " . $row['deskripsi'] . "</p>";
                echo "<div class='actions'>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                echo "<a href='index.php?delete_id=" . $row['id'] . "' class='delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'>Hapus</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada data info lowongan kerja.</p>";
        }
        ?>

        <div class="pagination">
            <?php
            for ($page = 1; $page <= $total_pages; $page++) {
                $active = $page == $current_page ? 'active' : '';
                echo "<a class='$active' href='index.php?page=$page'>$page</a>";
            }
            ?>
        </div> 
</body>
</html>
<?php
mysqli_close($conn);
?>
