<?php
session_start();

// Koneksi ke database
require 'koneksi.php';

// Pagination variables
$limit = 3; // Number of entries to show per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// Query to get total number of records
$totalQuery = "SELECT COUNT(*) AS total FROM loker";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$total = $totalRow['total'];

// Calculate total pages
$pages = ceil($total / $limit);

// Query to fetch data for the current page
$query = "SELECT * FROM loker LIMIT $start, $limit";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Kerja</title>
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
            max-width: 120px;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
            cursor: pointer;
        }

        .loker-item p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }

        .hr-divider {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        .container p {
            margin-bottom: 20px;
            color: #777;
        }

        .container a {
            text-decoration: none;
            color: #007BFF;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            background-color: #007BFF;
            color: #fff;
            transition: background-color 0.3s;
        }

        .container a:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            background-color: #007BFF;
            padding: 15px;
            border-radius: 8px;
        }

        .loker-details {
            flex: 1;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .pagination a {
            text-decoration: none;
            color: #007BFF;
            padding: 10px 20px;
            border-radius: 8px;
            background-color: #007BFF;
            color: #fff;
            margin: 0 5px;
            transition: background-color 0.3s;
        }

        .pagination a:hover {
            background-color: #0056b3;
        }

        .pagination .disabled {
            background-color: #ddd;
            pointer-events: none;
        }

        .logout-btn {
            margin-left: auto;
            background-color: #d9534f;
        }

        /* Modal Styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.9); 
        }

        .modal-content {
            margin: 15% auto; 
            display: block;
            width: 80%; 
            max-width: 700px; 
        }

        .modal-content, #caption {  
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lowongan Kerja</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='loker-item'>";
                echo "<img src='" . $row['foto'] . "' alt='Gambar Lowongan Kerja' onclick='openModal(this.src)'>";
                echo "<div class='loker-details'>";
                echo "<p><strong>Deskripsi:</strong> " . substr($row['deskripsi'], 0, 100) . "...</p>";
                echo "<p><strong>Jurusan:</strong> " . $row['jurusan'] . "</p>";
                echo "<p><strong>Kontak Person:</strong> " . $row['kontak_person'] . "</p>";
                echo "<a href='detail.php?id=" . $row['id'] . "'>Read More</a>";
                echo "</div>";
                echo "</div>";
                echo "<hr class='hr-divider'>";
            }
        } else {
            echo "<p>Tidak ada data info lowongan kerja.</p>";
        }
        ?>

        <!-- Pagination Controls -->
  <!-- Pagination Controls -->
<div class="pagination">
    <?php for ($i = 1; $i <= $pages; $i++): ?>
        <?php if ($i == $page): ?>
            <a class="active"><?php echo $i; ?></a>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <!-- Logout Button -->
    <a href="home.php" class="logout-btn">Keluar</a>
</div>

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="imgModal">
    </div>

    <script>
        function openModal(src) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("imgModal");
            modal.style.display = "block";
            modalImg.src = src;
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>
