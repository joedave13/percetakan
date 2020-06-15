<?php 
    include '../koneksi.php';
    $query = mysqli_query($koneksi, "DELETE FROM tb_cache");
    header('location: cache_index.php');
?>