<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <title>Radja Printing - Chatbot</title>
</head>

<body>
    <?php
        //Load fungsi
        include 'fungsi.php';
    ?>

    <div class="container my-5">
        <h2 class="text-center">Radja Printing Chatbot</h2>

        <div class="row justify-content-center mt-5">
            <div class="col-md-7">
                <!-- Card Chatbot -->
                <div class="card border-primary">
                    <div class="card-header">
                        <div class="card-title text-center text-primary"><b>Chatbot Customer Service</b></div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="col-11">
                                    <input type="text" name="keyword" id="keyword" class="form-control"
                                        placeholder="Tanyakan sesuatu...">
                                </div>
                                <div class="col-1">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <i class="fas fa-fw fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <dl class="row">
                            <dt class="col-sm-3">Respon Chatbot : </dt>
                            <dd class="col-sm-9">
                                <?php 
                                    if (isset($_POST['submit'])) {
                                        $keyword = strtolower($_POST['keyword']);
                                        ambilCache($keyword);
                                    }
                                ?>
                            </dd>
                        </dl>
                    </div>
                </div>
                <!-- End Card Chatbot -->

                <!-- Instruksi User -->
                <div class="alert alert-primary mt-4" role="alert">
                    <h4 class="alert-heading">Instruksi Penggunaan</h4>
                    <ul>
                        <li>Chatbot hanya menerima pertanyaan dengan Bahasa Indonesia</li>
                        <li>
                            Chatbot hanya melayani pertanyaan tentang :
                            <ul>
                                <li>Jam Layanan Percetakan</li>
                                <li>Jenis Layanan Percetakan</li>
                                <li>Harga Masing-Masing Layanan</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End Instruksi User -->
            </div>
        </div>

    </div>

    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>