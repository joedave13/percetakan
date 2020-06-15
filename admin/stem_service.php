<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $term = strtolower($_POST['term']);
            $stem = strtolower($_POST['stem']);

            $query = mysqli_query($koneksi, "INSERT INTO tb_stem VALUES ('', '$term', '$stem')");
            if ($query) {
                echo "Tambah Data Stem Berhasil!";
            }
            else {
                echo "Tambah Data Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;
    }
?>