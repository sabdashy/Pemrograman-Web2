<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        //Membuat Session
        $_SESSION["username"] = $username;
        // echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: admin.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
    }
} else {
    display_login_form();
}
function display_login_form()
{ ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Login</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
        <!-- Bootstrap core CSS -->
        <link href="dist/css/css_sabda/bootstrap.min.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="dist/css/css_sabda/login.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" name="submit" value="submit">Log-in</button>
            <p class="mt-5 mb-3 ">&copy; STTNF - TI10</p>
        </form>
    </body>

    </html>
<?php } ?>