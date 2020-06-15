<h3>Input Data Stem</h3>

<button id="backStem" class="btn btn-danger btn-sm my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <form id="formAddStem" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="term"><b>Term</b></label>
                <input type="text" name="term" id="term" class="form-control" placeholder="Term..." required>
            </div>
            <div class="form-group">
                <label for="stem"><b>Stem</b></label>
                <input type="text" name="stem" id="stem" class="form-control" placeholder="Stem..." required>
            </div>
            <input type="submit" name="simpanStem" id="simpanStem" value="Submit" class="btn btn-block btn-primary">
        </div>
    </form>
</div>