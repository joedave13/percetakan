<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>
<?php include 'fungsi.php'; ?>

<div class="col-md-9">
    <h3>Hasil Perhitungan TF-IDF</h3>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Jumlah Dokumen</h5>
                </div>
                <div class="card-body">
                    <?php buatIndex(); ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../templates/admin_footer.php'; ?>