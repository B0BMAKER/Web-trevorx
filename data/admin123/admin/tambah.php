<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <center>
        <br><br><br><br>
        <h1>Tambah Data Agen</h1>
        <div class="line"></div>
        <br>

        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="nama">Name: </label>
                    <input type="text" class="input-control" placeholder="nama..." name="nama" id="nama" required
                        autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="telepon">Phone Number: </label>
                    <input type="text" class="input-control" placeholder="no telepon..." name="telepon" id="telepon"
                        required autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="email">Fakename: </label>
                    <input type="text" class="input-control" placeholder="email..." name="email" id="email" required
                        autocomplete="off">
                </li>
                <br>
                <li>
                    <label for="gambar">Image: </label>
                    <input class="input-control" type="file" name="gambar" id="gambar">
                </li>
                <br>
                <li>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah Data!</button>
                </li>
            </ul>

        </form>

    </center>
    <link rel="stylesheet" href="@sweetalert2/theme-borderless/borderless.css">

    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
</body>

</html>
<?php 
// session_start();

// if ( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    
 // cek apakah data berhasil di tambahkan atau belum
 if( tambah($_POST) > 0 ) {
     echo "
     <script>
        alert('Successfully Added Data');
        document.location.href = 'index.php'
     </script>   
     ";
 } else {
    echo "
    <script>
       alert('Failed Added Data');
       document.location.href = 'index.php'
    </script>   
    ";
 }

}
?>