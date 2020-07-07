<?php 
    if (isset($_POST['editButton'])) {
        $id = $_POST['id_dok'];
        $dokumen = $_POST['data_dok'];

        mysqli_query($koneksi, "UPDATE tb_dokumen SET dokumen = '$dokumen' WHERE id = '$id'");
        header('location: master_index.php?pesan=edit');
    }
?>