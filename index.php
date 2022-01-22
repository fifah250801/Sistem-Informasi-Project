<!-- Start of Header-->
<?php 
include 'header.php';
include 'koneksi/koneksi.php';

?>
<!-- End of Header-->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <div class="btn-group">
                        <a href="tambah_karyawan.php" 
                        class="btn btn-primary btn-sm">Tambah Data</a>
				<h4 style="text-align: center;">Data Monitoring</h4>
                <table class="table table-hover table-bordered" style="margin-top: 10px">
                    <tr class="success">
                        <th width="50px">No</th>
                        <th>ID KARYAWAN</th>
                        <th>Judul</th>
                        <th>Project Leader</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>Nama Klien</th>
                        <th>Progres</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                <?php
                $data=mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
                    $a=1;
                    while($obj=mysqli_fetch_object($data)){
                ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $obj->id_karyawan ?></td>
                        <td><?= $obj->judul ?></td>
                        <td><?= $obj->project_leader ?></td>
                        <td><?= $obj->tanggal_mulai ?></td>
                        <td><?= $obj->tanggal_akhir ?></td>
                        <td><?= $obj->nama_klien ?></td>
                        <td><?= $obj->progress ?></td>
                        
                        <td>
                        <div class="btn-group">
                        <a href="ubah_data.php?id_karyawan=<?php echo $obj->id_karyawan ?>" 
                        class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="hapus_data.php?id_karyawan=<?php echo $obj->id_karyawan ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?');"> Delete</a>
                        </td>
                    </tr>

                    </tr>
                    <?php
                    $a++;
                    }
                
                ?>
                </table>
			</div>
		</div>

		<!-- main content end-->

<!-- Start of Footer-->

<?php include 'footer.php'?>

<!-- End of Footer-->