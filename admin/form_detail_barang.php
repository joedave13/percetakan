<?php 
    include '../koneksi.php';
    $dataBarang = mysqli_query($koneksi, "SELECT * FROM tb_cetakan");
    echo '<td><select name="barang[]" class="form-control select-barang" required>';
    while ($db = mysqli_fetch_array($dataBarang)) {
        echo '<option value="' . $db['id'] . '"> '. $db['nama'] . '</option>';
    }
    echo '</select></td>';
    echo '<td><input type="number" name="panjang[]" id="panjang[]" class="form-control"></td>
    <td><input type="number" name="lebar[]" id="lebar[]" class="form-control"></td>';
    mysqli_free_result($dataBarang);
?>