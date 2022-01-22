<?php
include 'koneksi/koneksi.php';
$dta =mysqli_query ($koneksi, "SELECT * FROM tb_karyawan WHERE id_karyawan = '$_GET[id_karyawan]' ");
$dt = mysqli_fetch_assoc($dta);

?>
<!-- Start of Header-->
<?php include 'header.php';?>
<!-- End of Header-->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Ubah Data</h4>
				<form action="proses_ubah.php" method ="post" enctype="multipart/form-data">
               
					<div class="form-group">
						<label for="id_karyawan">id_karyawan</label>
						<input type="number" name="id_karyawan" value="<?=$dt['id_karyawan'] ?>" id="id_karyawan" class="form-control "readonly>
					</div>

					<div class="form-group">
						<label for="judul" >Judul</label>
						<input type="text "name="judul" value="<?=$dt['judul'] ?>" id="judul" class ="form-control">
					</div>

					<div class="form-group">
						<label for="project_leader">Project Leader</label>
                        <input type="text " name="project_leader" id="project_leader" class="form-control" value="<?= $dt['project_leader'] ?>" />
						
					</div>

                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date " name="tanggal_mulai" id="tanggal_mulai" class="form-control" value="<?= $dt['tanggal_mulai'] ?>" />
                    </div>

                    <div class="form-group">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date " name="tanggal_akhir" id="tanggal_akhir" class="form-control" value="<?= $dt['tanggal_akhir'] ?>" />
                    </div>

					<div class="form-group">
						<label for="nama_klien" >Nama Klien</label>
						<input type="text "name="nama_klien" value="<?=$dt['nama_klien'] ?>" id="nama_klien" class ="form-control">
					</div>

					<div class="form-group">
						<label for="progress" >Progress</label>
						<input type="number "name="progress" value="<?=$dt['progress'] ?>" id="progress" class ="form-control">
					</div>

					
					<input type="submit" value="ubah" name="ubah" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>

		<!-- main content end-->

<!-- Start of Footer-->

<?php include 'footer.php'?>

<!-- End of Footer-->