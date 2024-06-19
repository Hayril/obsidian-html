<?php

session_start();

include("koneksi.php");


if (!isset($_SESSION['admin_logged_in'])) {
  header('Location: login.php');
  exit;
}

// Mendapatkan ID loker dari URL
$id = $_GET['id'];

// Menghapus loker dari database
$query = "DELETE FROM loker WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) {
  echo '<p>Loker berhasil dihapus.</p>';
  header('Location: index.php');
  exit;
} else {
  echo '<p>Gagal menghapus loker.</p>';
}

?>
