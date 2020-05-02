<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <title>Radja Printing - Login Page</title>
</head>

<body>
    <div class="text-center mt-5 mb-5">
        <h2>Radja Printing</h2>
    </div>

    <div class="container">
        <div class="col-md-6 offset-md-3">

            <?php  
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'no_username') {
                        echo "<div class='alert alert-dismissible alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Login gagal! Username tidak ditemukan!
                        </div>";
                    }
                    else if ($_GET['pesan'] == 'wrong_password') {
                        echo "<div class='alert alert-dismissible alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Login gagal! Password salah!
                        </div>";
                    }
                }
            ?>

            <form action="login_act.php" method="post">
                <div class="card">
                    <div class="card-header">
                        Login Page
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username"><b>Username</b></label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-check">
                            <label for="show" class="form-form-check-label">
                                <input type="checkbox" onclick="showPassword()" class="form-check-input"> Show Password
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-fw fa-sign-in-alt"></i> Login
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script>
        function showPassword() {
            var x = document.getElementById('password');
            if (x.type === 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
        }
    </script>
</body>

</html>