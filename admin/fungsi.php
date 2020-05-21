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
    $stoplist = array("yang", "juga", "dari", "dia", "kami", "kamu", "ini", "itu", "atau", "dan", "tersebut", "pada", "dengan", "adalah", "yaitu", "ke");

    foreach ($stoplist as $i => $value) {
        $teks = str_replace($stoplist[$i], "", $teks);
    }

    //Terapkan stemming (ubah ke kata dasar)
    $restem = mysqli_query($koneksi, "SELECT * FROM tb_stem ORDER BY id");

    while ($rowstem = mysqli_fetch_array($restem)) {
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
                } else {
                    mysqli_query($koneksi, "INSERT INTO tb_index (term, id_doc, jumlah) VALUES ('$aDokumen[$j]', $docId, 1)");
                }
            }
        }
    }
}

function hitungBobot()
{
    include '../koneksi.php';
    //Hitung total doc id
    $resn = mysqli_query($koneksi, "SELECT DISTINCT id_doc FROM tb_index");
    $n = mysqli_num_rows($resn);

    //Ambil setiap record dalam tb_index
    //Hitung bobot untuk setiap term
    $resBobot = mysqli_query($koneksi, "SELECT * FROM tb_index ORDER BY id");
    $num_rows = mysqli_num_rows($resBobot);
    print("Terdapat " . $num_rows . " term yang diberikan bobot. <br>");

    while ($rowBobot = mysqli_fetch_array($resBobot)) {
        //$w = tf * log(n/N)
        $term = $rowBobot['term'];
        $tf = $rowBobot['jumlah'];
        $id = $rowBobot['id'];
        
        //Jumlah dokumen yang mengandung term tersebut (N)
        $resNTerm = mysqli_query($koneksi, "SELECT COUNT(*) AS N FROM tb_index WHERE term = '$term'");
        $rowNTerm = mysqli_fetch_array($resNTerm);
        $NTerm = $rowNTerm['N'];
        
        $w = $tf * log($n/$NTerm);

        //Update bobot
        $resUpdateBobot = mysqli_query($koneksi, "UPDATE tb_index SET bobot = $w WHERE id = $id");
    }
}

function panjangVektor()
{
    include '../koneksi.php';
    //Hapus isi tabel vektor
    mysqli_query($koneksi, "TRUNCATE TABLE tb_vektor");

    //Ambil setiap doc id dari table index
    //Hitung panjang vektor untuk setiap doc id
    //Simpan ke table vektor
    $resDocId = mysqli_query($koneksi, "SELECT DISTINCT id_doc FROM tb_index");

    $num_rows = mysqli_num_rows($resDocId);
    print('Terdapat ' . $num_rows . " dokumen yang dihitung panjang vektornya. <br>");

    while ($rowDocId = mysqli_fetch_array($resDocId)) {
        $docId = $rowDocId['id_doc'];

        $resVektor = mysqli_query($koneksi, "SELECT bobot FROM tb_index WHERE id_doc = $docId");

        //Jumlahkan semua bobot kuadrat
        $panjangVektor = 0;
        while ($rowVektor = mysqli_fetch_array($resVektor)) {
            $panjangVektor = $panjangVektor + $rowVektor['bobot'] * $rowVektor['bobot'];
        }

        //Hitung akarnya
        $panjangVektor = sqrt($panjangVektor);

        //Masukkan ke dalam tabel vektor
        $resInsertVektor = mysqli_query($koneksi, "INSERT INTO tb_vektor (doc_id, panjang) VALUES ($docId, $panjangVektor)");
    }
}