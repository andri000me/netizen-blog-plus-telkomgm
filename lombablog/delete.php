<?php include 'template-parts/header.php' ?>	
<div class="container home">
		<h3> Hati-Hati & Teliti Sebelum Menghapus Data </h3>
		<?php include "connection.php"  ?>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="15px">ID</th>
                  <th >Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
		  <th>Alamat Situs</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
			  <?php 
				$result = mysql_query("SELECT * FROM lombacuy");
				
				while($data = mysql_fetch_object($result) ):
			  ?>
                <tr>
                  <td><?php echo $data->id ?></td>
                  <td><?php echo $data->namadepan." ".$data->namaakhir ?></td>
                  <td><?php echo $data->alamat?></td>
		  <td><?php echo $data->jeniskelamin?></td>
		  <td><?php echo $data->alamatsitus?></td>		  
		  <td><a href="deleteById.php?id=<?php echo $data->id ?>">
		      <button class="btn btn-danger"> Delete </button></a>
		  </td>
                </tr>
			  <?php
				endwhile;
			  ?>
              </tbody>
		</table>
</div>	
</div>
</body>
</html>
