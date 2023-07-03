<?php
session_start();
include('../inc/koneksi.php');
// Kode yang akan dijalankan ketika form disubmit
if(isset($_POST['submitForm'])){
    // Pernyataan global $connect; digunakan untuk mengakses variabel global $connect yang mewakili koneksi database
    global $connect;
    //Fungsi mysqli_real_escape_string($connect, $_POST['username']) dan mysqli_real_escape_string($connect, $_POST['password']) digunakan untuk melindungi karakter khusus dalam username dan password yang dikirimkan melalui formulir. Hal ini membantu mencegah serangan SQL injection.
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    //Query SQL dibuat dengan menggunakan nilai username dan password yang telah di-escape: $sql = "SELECT * FROM administrator WHERE username='".$username."' AND password='".$password."' ";.
   // Query tersebut dieksekusi menggunakan mysqli_query($connect, $sql) dan jumlah baris yang dikembalikan oleh query disimpan dalam variabel $numrow menggunakan mysqli_num_rows($result)
    $sql = "SELECT * FROM administrator WHERE username='".$username."' AND password='".$password."' ";
    $result = mysqli_query($connect, $sql);
    $numrow = mysqli_num_rows($result);

    $r = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //Jika $numrow lebih besar dari 0, artinya ditemukan pengguna yang sesuai di database. Dalam hal ini, informasi pengguna disimpan dalam variabel sesi $_SESSION['loginadmin'], $_SESSION['loginadminid'], $_SESSION['loginadminemail'], dan $_SESSION['loginadminnama'].
    if($numrow > 0)
    {
        $_SESSION['loginadmin'] = $r['username'];
        $_SESSION['loginadminid'] = $r['ID'];
        $_SESSION['loginadminemail'] = $r['email'];
        $_SESSION['loginadminnama'] = $r['Nama'];

       // Mengarahkan pengguna ke inc/index.php setelah berhasil login
        header('Location: ../inc/index.php');
        exit;
    } else {
        $error = "Username dan password tidak cocok";
        header('Location: ceklogin.php?error=' . urlencode($error));
        exit;
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Form Login -->
    <form class="row g-3" method="POST">
        <fieldset>
            <legend>Form Sign In</legend>
            <div class="col-md-6">
                <label>Username</label>
                <input type="text" name="username" placeholder="Input Username">
            </div>
            <div class="col-md-6">
                <label>Password</label>
                <input type="password" name="password" placeholder="Input Password">
            </div>
            <div class="col-12">
                <button type="submit" name="submitForm" value="submit" class="btn btn-primary">Sign in</button>
            </div>
        </fieldset>
    </form>
    <!-- Close Form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
