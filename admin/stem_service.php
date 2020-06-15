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

        case 'edit':
            $id = $_POST['id'];
            $term = strtolower($_POST['term']);
            $stem = strtolower($_POST['stem']);

            $query = mysqli_query($koneksi, "UPDATE tb_stem SET term = '$term', stem = '$stem' WHERE id = '$id'");

            if ($query) {
                echo "Edit Data Stem Berhasil!";
            }
            else {
                echo "Edit Data Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;

        case 'delete':
            $id = $_POST['idStem'];
            $query = mysqli_query($koneksi, "DELETE FROM tb_stem WHERE id = '$id'");

            if ($query) {
                echo "Delete Data Stem Berhasil!";
            }
            else {
                echo "Delete Data Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;
    }
