<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Wiwik Listiyarini - 41119051</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body class="container">

	<div class="card my-5">
		<div class="card-header">
			Create Siswa - Wiwik Listiyarini
		</div>
		<div class="card-body">

			<form action="<?= base_url('siswa/create'); ?>" method="post">

				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama siswa">
					<span class="text-danger"><small><?php echo form_error('nama'); ?></small></span>
				</div>

				<div class="form-group">
					<label for="jk">Jenis Kelamin</label>
					<select class="form-control" name="jk" id="jk">
						<option value="">Pilih jenis kelamin</option>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
					<span class="text-danger"><small><?php echo form_error('jk'); ?></small></span>
				</div>

				<div class="form-group">
					<label for="tmpt_lahir">Tempat Lahir</label>
					<input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="Tempat lahir">
					<span class="text-danger"><small><?php echo form_error('tmpt_lahir'); ?></small></span>
				</div>

				<div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal lahir">
					<span class="text-danger"><small><?php echo form_error('tgl_lahir'); ?></small></span>
				</div>

				<div class="form-group">
					<label for="no_telp">No.Telp</label>
					<input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No.Telp">
					<span class="text-danger"><small><?php echo form_error('no_telp'); ?></small></span>
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
					<span class="text-danger"><small><?php echo form_error('alamat'); ?></small></span>
				</div>

				<button type="submit" class="btn btn-primary">Selesai</button>

			</form>

		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
