<?php
include 'koneksi/koneksi.php';
if (isset($_POST['ubah'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $judul = $_POST['judul'];
    $project_leader = $_POST['project_leader'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $nama_klien = $_POST['nama_klien'];
    $progress = $_POST['progress'];
    



            $sql = mysqli_query($koneksi, "UPDATE tb_karyawan SET
                judul = '$judul',
                project_leader = '$project_leader',
                tanggal_mulai = '$tanggal_mulai',
                tanggal_akhir = '$tanggal_akhir',
                nama_klien  = '$nama_klien',
                progress = '$progress'
                WHERE id_karyawan = '$id_karyawan'");

            if ($sql) {
                echo "
            <script>
            alert('data berhasil diedit');
            document.location.href = 'index.php';
            </script>
            ";
            } else {
                echo "
            <script>
            alert('data gagal diedit');
            </script>
            ";
            }
        }
        ?>