<?php 
    include '../../koneksi.php';
    $data = $_POST['data'];

    mysqli_query($koneksi, "INSERT INTO tb_dokumen VALUES ('', '$data')");
     header('location: ../../admin/chatbot/master_index.php');
?>