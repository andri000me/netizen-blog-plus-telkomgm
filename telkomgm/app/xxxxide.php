<?php empty( $app ) ? header('location:../index.php') : '' ; if(isset($_SESSION['level'])){?>

<?php if($_SESSION['level']=='admin'){ ?>
<p>
	<a href="#" class="btn btn-mini"><i class="icon-plus"></i> Add New</a>
</p>
<?php } ?>

<div class="tab-content">
<table class="table table-bordered table-condensed table-hover">
	<thead>
		<tr class="nowrap">
			<th align="left">No Idea</th>
			<th align="left">Tanggal</th>
			<th align="left">Nama</th>
			<th align="left">NIK</th>
			<th align="left">No Telepon / Handphone</th>
			<th align="left">Lokasi Kerja</th>
			<th align="left">Jenis Ide</th>
			<th align="left">Isi Ide</th>
                        <th align="left">Keterangan</th>
			<?php if($_SESSION['level']=='admin'){?>
			<th colspan = "2" align="center">Action</th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
		<tr class="nowrap">
			<td>1</td>
			<td>0810031802111</td>
			<td>Iwan Satu</td>
			<td>Sumatra Utara</td>
			<td>10/10/2012</td>
			<td>Laki-laki</td>
			<td>Jl. Utama Pekanbaru</td>
			<td>08127615xxx</td>
			<?php if($_SESSION['level']=='admin'){?>
			<td><a href="#" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
			<td><a href="#" class="btn btn-mini" onClick="return confirm('Delete mahasiswa dengan NIM : <?php echo 'X';?>');"><i class="icon-trash"></i> Delete</a></td>
			<?php } ?>
		</tr>
		<tr class="nowrap">
			<td>2</td>
			<td>0810031802112</td>
			<td>Iwan Dua</td>
			<td>Sumatra Barat</td>
			<td>10/10/2012</td>
			<td>Laki-laki</td>
			<td>Jl. Utama Pekanbaru</td>
			<td>08127615xxx</td>
			<?php if($_SESSION['level']=='admin'){?>
			<td><a href="#" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
			<td><a href="#" class="btn btn-mini" onClick="return confirm('Delete mahasiswa dengan NIM : <?php echo 'X';?>');"><i class="icon-trash"></i> Delete</a></td>
			<?php } ?>
		</tr>
		<tr class="nowrap">
			<td>3</td>
			<td>0810031802113</td>
			<td>Iwan Tiga</td>
			<td>Sulawesi Selatan</td>
			<td>10/10/2012</td>
			<td>Laki-laki</td>
			<td>Jl. Utama Pekanbaru</td>
			<td>08127615xxx</td>
			<?php if($_SESSION['level']=='admin'){?>
			<td><a href="#" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
			<td><a href="#" class="btn btn-mini" onClick="return confirm('Delete mahasiswa dengan NIM : <?php echo 'X';?>');"><i class="icon-trash"></i> Delete</a></td>
			<?php } ?>
		</tr>
		<tr class="nowrap">
			<td>4</td>
			<td>0810031802114</td>
			<td>Iwan Empat</td>
			<td>Sumatra Saja</td>
			<td>10/10/2012</td>
			<td>Laki-laki</td>
			<td>Jl. Utama Pekanbaru</td>
			<td>08127615xxx</td>
			<?php if($_SESSION['level']=='admin'){?>
			<td><a href="#" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
			<td><a href="#" class="btn btn-mini" onClick="return confirm('Delete mahasiswa dengan NIM : <?php echo 'X';?>');"><i class="icon-trash"></i> Delete</a></td>
			<?php }?>
		</tr>
	</tbody>
</table>
<p><b>Note : </b>Data diatas merupakan data statis (bukan diambil dari database),.. Untuk menampilkan data dari database silahkan
modifikasi sendiri file ini <b>Path : app/datamahasiswa.php </b>
</p>
</div>
<?php 
}else{
echo '<div class="alert alert-error"> Maaf Anda Harus Login terlebih dahulu untuk mengakses halaman ini </div>';
}
