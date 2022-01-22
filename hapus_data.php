<?php
 include("koneksi/koneksi.php"); // untuk memanggil file koneksi.php

 if (isset($_GET['id_karyawan'])) {
    // get data buku
    $buku = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id_karyawan IN ('{$_GET['id_karyawan']}')");
    


    $query = "DELETE FROM tb_karyawan where id_karyawan = '{$_GET['id_karyawan']}'";
    $rest = mysqli_query($koneksi, $query);
    if ($rest)
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href= 'index.php';
    </script>";
    else die('Gagal Hapus');
}
?>