<?php 
    include '../koneksi.php';
    $data = $_POST['data'];

    mysqli_query($koneksi, "INSERT INTO tb_dokumen VALUES ('', '$data')");
    header('location: master_index.php');
?>