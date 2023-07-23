<?php 

require "../function/koneksi.php";

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
       alert('postingan berhasil dihapus');
       document.location.href = 'index.php'
    </script>   
    ";
}else {
    echo "
    <script>
       alert('postingan gagal dihapus');
       document.location.href = 'index.php'
    </script>   
    ";
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}


?>