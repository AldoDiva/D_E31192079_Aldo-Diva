<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Datatables user</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr><th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th></tr>
				</thead>
				<tfoot>
					<tr><th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th></tr>
				</tfoot>
				<tbody>
					<?php $no = 1;
						foreach($user as $baris){
						 ?> 
						 <!--melakukan perulangan $user dari controller diubah menjadi $baris-->
						 <tr><td><?php echo $no++; ?></td>
						 	<td><?php echo $baris->username; ?></td> <!--menampilkan username-->
						 	<td><?php echo $baris->nama; ?></td> <!--menampilkan nama-->
						 	<td><?php echo $baris->grup; ?></td> <!--menampilkan grup-->
						 	<td></td></tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span>
		</a>
	</div>
</div>
