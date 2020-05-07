<?php 
    include '../koneksi.php';

    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM tb_dokumen WHERE id ='$id'");
    header('location: master_index.php?pesan=delete');
?>