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
			Data Siswa - Wiwik Listiyarini
		</div>
		<div class="card-body">

			<p><a name="create" id="create" class="btn btn-success" href="<?=base_url('siswa/create');?>" role="button">Create</a></p>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Tempat Lahir</th>
						<th>Telp</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach($students as $siswa) {
					?>
					<tr>
						<td scope="row"><?=$no++;?></td>
						<td><?=$siswa->nama;?></td>
						<td><?=$siswa->jk;?></td>
						<td><?=$siswa->tmpt_lahir;?></td>
						<td><?=$siswa->tgl_lahir;?></td>
						<td><?=$siswa->no_telp;?></td>
						<td><?=$siswa->alamat;?></td>
						<td>
							<a name="edit" id="edit" class="btn btn-warning btn-sm" href="<?=base_url('siswa');?>" role="button">Edit</a>
							<a name="hapus" id="hapus" class="btn btn-danger btn-sm" href="<?=base_url('siswa');?>" role="button">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
