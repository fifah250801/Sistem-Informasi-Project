<?php
include 'koneksi/koneksi.php';
?>
<!-- Start of Header-->
<?php include 'header.php'?>
<!-- End of Header-->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h4 class="form-weight-bold">Tambah Karyawan</h4>
				<form action="proses_tambah.php" method ="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="id_karyawan">ID </label>
						<input type="number" name="id_karyawan" id="id_karyawan" class="form-control">
					</div>

					<div class="form-group">
						<label for="judul" >Judul</label>
						<input type="text "name="judul" id="judul" class ="form-control">
					</div>

					<div class="form-group">
						<label for="project_leader">Project Leader</label>
						<input type="text "name="project_leader" id="form-group-input-1" class ="form-control">
					
					</div>

					<div class="form-group">
						<label for="form-group-input-1">Tanggal Mulai</label>
						<input type="date "name="tanggal_mulai" id="tanggal_mulai" class ="form-control">
					
					</div>

					<div class="form-group">
						<label for="tanggal_akhir">Tanggal Akhir</label>
						<input type="date "name="tanggal_akhir" id="tanggal_akhir" class ="form-control">
					
					</div>

					
					<div class="form-group">
						<label for="nama_klien" >Nama Klien</label>
						<input type="text "name="nama_klien" id="nama_klien" class ="form-control">
					</div>

					<div class="form-group">
						<label for="progress" >Progress </label>
						<input type="number "name="progress" id="progress" class ="form-control">
					</div>

					
					<input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary">
				</form>
			</div>
		</div>

		<!-- main content end-->

<!-- Start of Footer-->

<?php include 'footer.php'?>

<!-- End of Footer-->



		