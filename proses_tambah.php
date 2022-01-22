<?php
include 'koneksi/koneksi.php';


if(isset($_POST['simpan'])){
    $id_karyawan = $_POST['id_karyawan'];
    $judul = $_POST['judul'];
    $project_leader = $_POST['project_leader'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $nama_klien = $_POST['nama_klien'];
    $progress = $_POST['progress'];
    
        $sql = "INSERT INTO tb_karyawan(id_karyawan,judul,project_leader,tanggal_mulai,tanggal_akhir,nama_klien,progress) VALUE ('$id_karyawan','$judul','$project_leader','$tanggal_mulai','$tanggal_akhir','$nama_klien','$progress')";

        $query = mysqli_query($koneksi, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: index.php?status=sukses');
        }else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.php?status=gagal');

    }
}





?>