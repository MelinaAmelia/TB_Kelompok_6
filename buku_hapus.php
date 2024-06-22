<?php
$id = $_GET['id'];

// Menghapus entri terkait di tabel ulasan
$queryUlasan = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_buku=$id");

if ($queryUlasan) {
    // Menghapus entri di tabel buku setelah entri terkait di ulasan dihapus
    $queryBuku = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");

    if ($queryBuku) {
        echo "<script>
            alert('Hapus data berhasil');
            location.href = 'index.php?page=buku';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data buku');
            location.href = 'index.php?page=buku';
        </script>";
    }
} else {
    echo "<script>
        alert('Gagal menghapus data ulasan terkait');
        location.href = 'index.php?page=buku';
    </script>";
}
?>
