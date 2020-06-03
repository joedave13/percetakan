<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            $email = $_POST['email'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES (null, '$nama', '$jk', '$alamat', '$hp', '$email')");
            if ($query) {
                echo "Tambah Data Pelanggan Berhasil!";
            }
            else {
                echo "Tambah Data Pelanggan Gagal :" . mysqli_error($koneksi);
            }
        break;

        case 'edit':
            $idPelanggan = $_POST['id'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            $email = $_POST['email'];

            $query = mysqli_query($koneksi, "UPDATE tb_pelanggan SET pelanggan_nama = '$nama', pelanggan_jk = '$jk', pelanggan_alamat = '$alamat', pelanggan_hp = '$hp', pelanggan_email = '$email' WHERE pelanggan_id = '$idPelanggan'");
            
            if ($query) {
                echo "Edit Data Pelanggan Berhasil!";
            }
            else {
                echo "Edit Data Pelanggan Gagal :" . mysqli_error($koneksi);
            }
        break;

        case 'delete':
            $idPelanggan = $_POST['idPelanggan'];
            $query = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE pelanggan_id = '$idPelanggan'");

            if ($query) {
                echo "Delete Data Pelanggan Berhasil!";
            }
            else {
                echo "Delete Data Pelanggan Gagal :" . mysqli_error($koneksi);
            }
        break;
    }
?>