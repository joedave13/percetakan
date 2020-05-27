<h3>Input Layanan Cetakan</h3>

<button id="backCetakan" class="btn btn-danger my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <form id="formAddCetakan" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nama"><b>Nama Layanan</b></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Cetakan..." required>
            </div>
            <div class="form-group">
                <label for="harga"><b>Harga</b></label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga Cetakan..." required>
            </div>
            <input type="submit" name="simpanCetakan" id="simpanCetakan" value="Submit"
                class="btn btn-block btn-primary">
        </div>
    </form>
</div>