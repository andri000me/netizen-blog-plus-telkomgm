<?php include 'template-parts/header.php'?>
	<div class="container home">
		<h3> Peserta Baru </h3>
		
		<?php
			include 'connection.php'; 
			
			if( isset( $_POST['create'] ) ): 
				
				$anama = $_POST['namadepan']; 
				$bnama = $_POST['namaakhir'];
				$alamat = $_POST['alamat'];
				$kelamin = $_POST['jeniskelamin'];
				$alamatsitus = $_POST['alamatsitus'];
				$nilai1 = $_POST['nilai1'];
				$nilai2 = $_POST['nilai2'];
				$nilai3 = $_POST['nilai3'];
				$nilai4 = $_POST['nilai4'];
                                $nilai5 = $_POST['nilai5'];
                                $total = $_POST['total'];
				mysql_query("INSERT INTO lombacuy(namadepan,namaakhir,alamat,jeniskelamin,alamatsitus,nilai1,nilai2,nilai3,nilai4,nilai5,total) 
							VALUES('$anama','$bnama','$alamat','$kelamin','$alamatsitus','$nilai1','$nilai2','$nilai3','$nilai4','$nilai5','$total')") 
							or die(mysql_error()); /*** kepo **/
							
				echo "<div class='alert alert-info'> Berhasil Disimpan. </div>"; /** pesan sukses **/
			
			endif;
		?>
		
		
		<form action="" method="POST">
			<label> Nama Lengkap: </label>
				<input type="text" placeholder="Nama Depan" class="input-medium" name="namadepan" />
				<input type="text" placeholder="Nama Akhir" class="input-medium" name="namaakhir"/>
			<label> Alamat: </label>
				<textarea class="span7" name="alamat"></textarea>
			<label> Jenis Kelamin: </label>
				<select class="span2" name="jeniskelamin">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			<label> Alamat Situs: </label>
				<input type="text" placeholder="Isi alamat situs lomba" class="input-xxlarge" name="alamatsitus" />
			<label> Nilai </label>
				<input type="text" placeholder="Nilai 1" class="input-medium" name="nilai1"/>
				<input type="text" placeholder="Nilai 2" class="input-medium" name="nilai2"/>
				<input type="text" placeholder="Nilai 3" class="input-medium" name="nilai3"/>
				<input type="text" placeholder="Nilai 4" class="input-medium" name="nilai4"/>
				<input type="text" placeholder="Nilai 5" class="input-medium" name="nilai5"/>                                
				<input type="text" placeholder="Total" class="input-medium" name="total"/>
			<br />
			<input type="submit" name="create" value="Selesai" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
