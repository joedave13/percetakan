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
                <?php 
                    if(isset($_POST['submit'])) {
                        $question = $_POST['keyword'];
                        $keyword = strtolower($question);
                        $answer = ambilCache($keyword);
                        echo '<div class="card w-50 float-right">
                        <div class="card-body">
                            <h6><b>Customer : </b></h6>
                            <small>' . date('d M Y H:i:s') . '</small>
                            <p class="card-text">' . $question . '</p>
                        </div>
                        </div>';
                        echo '<div class="my-5">';
                        echo '<div class="card w-50 float-left mt-5">
                        <div class="card-body">
                        <h6><b>Chatbot : </b></h6>
                            <small>' . date('d M Y H:i:s') . '</small>
                            <p class="card-text">' . $answer . '</p>
                        </div>
                        </div>';
                        echo '</div>';
                    }
                ?>
            </div>
            <div class="card-footer">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="col-sm-10">
                            <input type="text" name="keyword" id="keyword" class="form-control mr-2"
                                placeholder="Silahkan bertanya" required>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/admin_footer.php'; ?>