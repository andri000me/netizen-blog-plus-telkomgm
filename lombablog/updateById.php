<?php include 'template-parts/header.php' ?>
	<div class="container home">
		<h3> Update Data Peserta </h3>
		
		<?php
			include 'connection.php'; 
			
			$id = $_GET['id']; 
			
			if( isset( $_POST['update'] ) ): 
				
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
                               
				
				mysql_query("UPDATE lombacuy SET namadepan = '$anama',namaakhir = '$bnama', alamat = '$alamat', jeniskelamin = '$kelamin',alamatsitus = '$alamatsitus',nilai1 = '$nilai1',nilai2 = '$nilai2',nilai3 = '$nilai3',nilai4 = '$nilai4',nilai5 = '$nilai5' WHERE id = '$id'") 
							or die(mysql_error()); /**kepo **/
							
				echo "<div class='alert alert-info'> Update Berhasil. </div>"; /** success message **/
			
			endif;
			
			
			$result = mysql_query("SELECT * FROM lombacuy WHERE id='$id'");
			
			$data = mysql_fetch_object( $result ); 
			
		?>
		
		
		<form action="" method="POST">
			<label> Update Nama: </label>
				<input type="text" value="<?php echo $data->namadepan ?>" class="input-medium" name="namadepan" />
				<input type="text" value="<?php echo $data->namaakhir ?>" class="input-medium" name="namaakhir"/>
			<label> Update Alamat: </label>
				<textarea class="span7" name="alamat"><?php echo $data->alamat ?></textarea>
			<label> Update Jenis Kelamin: </label>
				<select class="span2" name="jeniskelamin">
					<?php if($data->gender=='Laki-laki'): ?>
						<option value="Laki-laki" selected>Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					<?php else: ?>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan" selected>Perempuan</option>
					<?php endif; ?>
				</select>
			<label> Update Alamat Situs: </label>
				<input type="text" value="<?php echo $data->alamatsitus ?>" class="input-xxlarge" name="alamatsitus" />
			<label> Update Nilai </label>
				<input type="text" value="<?php echo $data->nilai1 ?>" class="input-medium" name="nilai1" />
				<input type="text" value="<?php echo $data->nilai2 ?>" class="input-medium" name="nilai2" />
                                <input type="text" value="<?php echo $data->nilai3 ?>" class="input-medium" name="nilai3" />
                                <input type="text" value="<?php echo $data->nilai4 ?>" class="input-medium" name="nilai4" />
                                <input type="text" value="<?php echo $data->nilai5 ?>" class="input-medium" name="nilai5" />
			<br />
			<input type="submit" name="update" value="Update" class="btn btn-info" />	
			
		</form>		
	</div>	
</div>
</body>
</html>
