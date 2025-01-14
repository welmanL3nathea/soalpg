<?php
include 'koneksi.php';

$id = $_GET['id'];  // Mendapatkan ID soal yang ingin dihapus

// Hapus soal dari database
$sql = "DELETE FROM soal WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "Soal berhasil dihapus. <a href='index.php'>Kembali ke Daftar Soal</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
