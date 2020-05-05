<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>


<!-- Content -->
<div class="col-md-9">
    <div class="jumbotron">
        <h1 class="display-3">Welcome back!</h1>
        <p class="lead">Selamat datang di sistem informasi penjualan online Radja Printing.</p>
        <hr class="my-4">
        <p>Anda sekarang login sebagai : <?= $_SESSION['nama']; ?>.</p>
    </div>
</div>
<!-- End content -->

<?php include '../templates/admin_footer.php'; ?>