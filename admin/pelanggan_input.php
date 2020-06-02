<h3>Input Pelanggan Baru</h3>

<button id="backPelanggan" class="btn btn-danger my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <form id="formAddPelanggan" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nama"><b>Nama Pelanggan</b></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pelanggan..." required>
            </div>
            <div class="form-group">
                <label for="jk"><b>Jenis Kelamin</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Pria">
                    <label class="form-check-label" for="jk">
                        Pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Wanita">
                    <label class="form-check-label" for="jk">
                        Wanita
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="hp"><b>Nomor HP</b></label>
                <input type="text" name="hp" id="hp" class="form-control col-md-4" placeholder="Nomor HP...">
            </div>
            <div class="form-group">
                <label for="email"><b>Alamat Email</b></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Alamat Email...">
            </div>
            <div class="form-group">
                <input type="submit" name="simpanPelanggan" id="simpanPelanggan" value="Tambah Pelanggan"
                    class="btn btn-block btn-primary">
            </div>
        </div>
    </form>
</div>