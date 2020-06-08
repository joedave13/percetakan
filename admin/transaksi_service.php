<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $tglTransaksi = $_POST['tgl'];
            $pelanggan = $_POST['pelanggan'];
            $status = 1;

            //Insert tb_transaksi
            mysqli_query($koneksi, "INSERT INTO tb_transaksi VALUES ('', '$tglTransaksi', '$pelanggan', '$status')");

            $last_id = mysqli_insert_id($koneksi);

            $barang = $_POST['barang'];
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            for ($i = 0; $i < count($barang); $i++) { 
                if ($barang[$i] != "") {
                    mysqli_query($koneksi, "INSERT INTO tb_detail_transaksi VALUES ('', '$last_id', '$barang[$i]', '$panjang[$i]', '$lebar[$i]')");
                }
            }

            echo 'Tambah Data Transaksi Berhasil!';
        break;

        case 'edit':
            $idTransaksi = $_POST['transaksi_id'];
            $tglTransaksi = $_POST['tgl'];
            $pelanggan = $_POST['pelanggan'];
            $status = $_POST['status'];

            //Update table transaksi
            mysqli_query($koneksi, "UPDATE tb_transaksi SET transaksi_tgl = '$tglTransaksi', transaksi_pelanggan = '$pelanggan', transaksi_status = '$status' WHERE transaksi_id = '$idTransaksi'");
            
            //Tangkap data pada detail barang
            $barang = $_POST['barang'];
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            //Delete semua barang pada transaksi ini
            mysqli_query($koneksi, "DELETE FROM tb_detail_transaksi WHERE detail_transaksi = '$idTransaksi'");

            //Input ulang
            for ($i = 0; $i < count($barang); $i++) { 
                if ($barang[$i] != "") {
                    mysqli_query($koneksi, "INSERT INTO tb_detail_transaksi VALUES ('', '$idTransaksi', '$barang[$i]', '$panjang[$i]', '$lebar[$i]')");
                }
            }

            echo 'Edit Data Transaksi Berhasil!';
        break;
    }