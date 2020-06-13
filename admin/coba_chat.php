<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>
<?php include 'fungsi.php'; ?>

<div class="col-md-9">
    <h3>Percobaan Chatbot</h3>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <div class="text-center">Chatbot</div>
            </div>
            <div class="card-body">
                <form action="" method="post" class="form-inline">
                    <input type="text" name="keyword" id="keyword" class="form-control mr-2"
                        placeholder="Silahkan bertanya" required>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

                <textarea name="respon" id="respon" cols="30" rows="10" class="form-control mt-3" readonly>
                    <?php  
                        if (isset($_POST['submit'])) {
                            $keyword = strtolower($_POST['keyword']);
                            ambilCache($keyword);
                        }
                    ?>
                </textarea>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/admin_footer.php'; ?>