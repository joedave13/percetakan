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
    }
