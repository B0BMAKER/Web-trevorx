<?php
session_start();
if (!isset($_SESSION["level-2"])) {
    header("Location: level-2");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISCI Team | Level 3</title>
    <link rel="shortcut icon" href="assets/img/isci777.png" type="image/x-icon">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/challenge.css">
    <link rel="stylesheet" href="node_modules/@sweetalert2/theme-borderless/borderless.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h1><i>L</i>e<i>v</i>el 0<i>3</i></h1>
                    <div class="line"></div>
                    <br><br>
                    <form action="" method="POST">
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="Username">
                        <br>
                        <br>
                        <button type="submit" name="submit" class="submit"><i>S</i>ubm<i>i</i><i>t</i></button>
                    </form>
                    <br>
                    <p class="text-xl penjelasan text-teal-600">Te<i>k</i>nik <i>:</i> <span class="text-teal-100">Information
                            Gathering</span></p>
                    <p class="text-xl penjelasan text-teal-600">Petun<i>j</i>uk : <span class="text-teal-100"><i>V</i>iew Page
                            <i>S</i>ource</span></p>

                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<?php

if (isset($_POST["submit"])) {


    $username = "Lv3Sitk:jVS";


    if ($_POST["username"] == $username) {
        $_SESSION["level-3"] = true;
        header("Location: level-4");
        exit;
    } else {
        echo "<script>
            Swal.fire({
            icon: `error`,
            title: `Yaahh...`,
            text: `Your Information Gathering skill isn't that good... :)`,
            })
        </script>";
    }
}

?>



</html>