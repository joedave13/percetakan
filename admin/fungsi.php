<?php 
    function preproses($teks)
    {
        include '../koneksi.php';
        //Bersihkan tanda baca, ganti dengan space
        $teks = str_replace("'", " ", $teks);
        $teks = str_replace("-", " ", $teks);
        $teks = str_replace(")", " ", $teks);
        $teks = str_replace("(", " ", $teks);
        $teks = str_replace("\"", " ", $teks);
        $teks = str_replace("/", " ", $teks);
        $teks = str_replace("=", " ", $teks);
        $teks = str_replace(".", " ", $teks);
        $teks = str_replace(",", " ", $teks);
        $teks = str_replace(":", " ", $teks);
        $teks = str_replace(";", " ", $teks);
        $teks = str_replace("!", " ", $teks);
        $teks = str_replace("?", " ", $teks);

        //Ubah ke huruf kecil
        $teks = strtolower(trim($teks));
        
        //Stopword remove
        $stoplist = array ("yang", "juga", "dari", "dia", "kami", "kamu", "ini", "itu", "atau", "dan", "tersebut", "pada", "dengan", "adalah", "yaitu", "ke");

        foreach ($stoplist as $i => $value) {
            $teks = str_replace($stoplist[$i], "", $teks);
        }

        //Terapkan stemming (ubah ke kata dasar)
        $restem = mysqli_query($koneksi, "SELECT * FROM tb_stem ORDER BY id");

        while($rowstem = mysqli_fetch_array($restem)){
            $teks = str_replace($rowstem['term'], $rowstem['stem'], $teks);
        }

        //Return teks
        $teks = strtolower(trim($teks));
        return $teks;
    }

    function buatIndex()
    {
        include '../koneksi.php';

        //Hapus index sebelumnya
        mysqli_query($koneksi, "TRUNCATE TABLE tb_index");

        //Ambil semua dokumen (teks)
        $resDokumen = mysqli_query($koneksi, "SELECT * FROM tb_dokumen ORDER BY id");
        $num_rows = mysqli_num_rows($resDokumen);
        print("Mengindeks sebanyak " . $num_rows . " dokumen. <br>");

        while ($row = mysqli_fetch_array($resDokumen)) {
            $docId = $row['id'];
            $dokumen = $row['dokumen'];

            //Preprocessing
            $dokumen = preproses($dokumen);

            //Simpan ke tabel index
            $aDokumen = explode(" ", trim($dokumen));

            foreach ($aDokumen as $j => $value) {
                if ($aDokumen[$j] != "") {
                    //Jumlah baris yang dikembalikan query tersebut
                    $rescount = mysqli_query($koneksi, "SELECT jumlah FROM tb_index WHERE term = '$aDokumen[$j]' AND id_doc = $docId");
                    $num_rows = mysqli_num_rows($rescount);

                    if ($num_rows > 0) {
                        $rowcount = mysqli_fetch_array($rescount);
                        $count = $rowcount['jumlah'];
                        $count++;

                        mysqli_query($koneksi, "UPDATE tb_index SET jumlah = $count WHERE term = '$aDokumen[$j]' AND id_doc = $docId");
                    }
                    else {
                        mysqli_query($koneksi, "INSERT INTO tb_index (term, id_doc, jumlah) VALUES ('$aDokumen[$j]', $docId, 1)");
                    }
                }
            }
        }
    }
?>