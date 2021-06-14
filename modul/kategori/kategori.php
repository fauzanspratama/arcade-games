<?php
if(isset($_GET['tipe'])){
	// Modul tambah kategori
	if($_GET['tipe']=='tambah'){
		echo "
			<h2>Manajemen Kategori</h2>
			<form method='POST' action='modul/kategori/tambah.php'>
				<table width='100%'>
					<tr width='100%'>
						<td>Nama Kategori</td>
						<td><input type='text' name='kategori' size='40'/></td>
						<td width='250px'>
							<button class='btn btn-info btn-md' type='submit'>SIMPAN</button>
							<button class='btn btn-info btn-md' type='button' onClick='history.back();'>BATAL</button>
						</td>
					</tr>
				</table>
			</form>
			<div width='100%'' style='padding-top: 20px; padding-bottom: 20px;''>
			<hr>
	      	<table width='100%'>
	      		<tr>
	        		<th width='40px'>No.</th>
					<th>Kategori</th>
					<th width='250px'></th>                  
	      		</tr>
	      	</table>
	      	<hr> ";
	      
		    $halperpage = 5;

		    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;

		    $next = $page+1;

		    $prev = $page-1;
		      
		    $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;

		    $result = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC");

		    $total = mysqli_num_rows($result);

		    $pages = ceil($total/$halperpage);            
		      
		    $query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC LIMIT $mulai, $halperpage")or die();
		      
		    $no = $mulai+1;

		    while ($data = mysqli_fetch_assoc($query)) 
		    {
		    ?>
		    <table width="100%">
		        <tr>
		          	<td width="40px"><?php echo $no++; ?></td>
		          	<td><?php echo $data['nama_kategori']; ?></td>
		          	<td width="250px">
		          		<?php
		          		echo "
		          		<a class='btn btn-info btn-md' href='?m=kategori&tipe=edit&id=$data[id_kategori]'>Edit</a>
						<a class='btn btn-info btn-md' href='modul/kategori/hapus.php?id=$data[id_kategori]' onClick='return confirm(\"anda yakin menghapus?\")'>Hapus</a>
						";
						?>
					</td>                             
		        </tr>
		    </table>
		    <?php               
		    } 
		    ?>
		    <hr>
	      	<nav aria-label="Page navigation example">
			  	<ul class="pagination">
			  		<?php if ($page>1) {?>
			  			<li class="page-item">
				    	  	<a class="page-link" href="?m=kategori&halaman=<?php echo $prev; ?>" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
				      		</a>
				    	</li>
			  		<?php } ?>
			    	
			    	<?php if ($total>$halperpage) {
			    		for ($i=1; $i<=$pages ; $i++){?>
	        			<li class="page-item"><a class="page-link" href="?m=kategori&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	        			<?php }
			    	} ?>
			    	

	        		<?php if ($page<$pages) { ?>
	        			<li class="page-item">
					      	<a class="page-link" href="?m=kategori&halaman=<?php echo $next; ?>" aria-label="Next">
					        	<span aria-hidden="true">&raquo;</span>
					        	<span class="sr-only">Next</span>
					      	</a>
					    </li>
	        		<?php } ?>
			  	</ul>
			</nav>    
	  	</div> 
		<?php
	}elseif ($_GET['tipe']=='edit') {
		$sql=mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
		$de=mysqli_fetch_array($sql);
		echo "

			<h2>Manajemen Kategori</h2>
			<form method='POST' action='modul/kategori/edit.php'>
				<input type='hidden' name='id' value='$de[id_kategori]'/>
				<table width='100%'>
					<tr width='100%'>
						<td>Nama Kategori</td>
						<td><input type='text' name='kategori' value='$de[nama_kategori]' size='40'/></td>
						<td width='250px'>
							<button class='btn btn-info btn-md' type='submit'>SIMPAN</button>
							<button class='btn btn-info btn-md' type='button' onClick='history.back();'>BATAL</button>
						</td>
					</tr>
				</table>
			</form>
			<div width='100%'' style='padding-top: 20px; padding-bottom: 20px;''>
			<hr>
	      	<table width='100%'>
	      		<tr>
	        		<th width='40px'>No.</th>
					<th>Kategori</th>
					<th width='250px'></th>                  
	      		</tr>
	      	</table>
	      	<hr> ";
	      
		    $halperpage = 5;

		    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;

		    $next = $page+1;

		    $prev = $page-1;
		      
		    $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;

		    $result = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC");

		    $total = mysqli_num_rows($result);

		    $pages = ceil($total/$halperpage);            
		      
		    $query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC LIMIT $mulai, $halperpage")or die();
		      
		    $no = $mulai+1;

		    while ($data = mysqli_fetch_assoc($query)) 
		    {
		    ?>
		    <table width="100%">
		        <tr>
		          	<td width="40px"><?php echo $no++; ?></td>
		          	<td><?php echo $data['nama_kategori']; ?></td>
		          	<td width="250px">
		          		<?php
		          		echo "
		          		<a class='btn btn-info btn-md' href='?m=kategori&tipe=edit&id=$data[id_kategori]'>Edit</a>
						<a class='btn btn-info btn-md' href='modul/kategori/hapus.php?id=$data[id_kategori]' onClick='return confirm(\"anda yakin menghapus?\")'>Hapus</a>
						";
						?>
					</td>                             
		        </tr>
		    </table>
		    <?php               
		    } 
		    ?>
		    <hr>
	      	<nav aria-label="Page navigation example">
			  	<ul class="pagination">
			  		<?php if ($page>1) {?>
			  			<li class="page-item">
				    	  	<a class="page-link" href="?m=kategori&halaman=<?php echo $prev; ?>" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
				      		</a>
				    	</li>
			  		<?php } ?>
			    	
			    	<?php if ($total>$halperpage) {
			    		for ($i=1; $i<=$pages ; $i++){?>
	        			<li class="page-item"><a class="page-link" href="?m=kategori&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	        			<?php }
			    	} ?>
			    	

	        		<?php if ($page<$pages) { ?>
	        			<li class="page-item">
					      	<a class="page-link" href="?m=kategori&halaman=<?php echo $next; ?>" aria-label="Next">
					        	<span aria-hidden="true">&raquo;</span>
					        	<span class="sr-only">Next</span>
					      	</a>
					    </li>
	        		<?php } ?>
			  	</ul>
			</nav>    
	  	</div> 
		<?php
	}
}else{
	?>
		<h2>Manajemen Kategori</h2><hr>
		<a class="btn btn-info btn-md" href="?m=kategori&tipe=tambah">Buat Baru</a>
		<div width="100%" style="padding-top: 20px; padding-bottom: 20px;">
			<hr>
	      	<table width="100%">
	      		<tr>
	        		<th width="40px">No.</th>
					<th>Kategori</th>
					<th width="250px"></th>                  
	      		</tr>
	      	</table>
	      	<hr>
		    <?php 
		    $halperpage = 5;

		    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;

		    $next = $page+1;

		    $prev = $page-1;
		      
		    $mulai = ($page>1) ? ($page * $halperpage) - $halperpage : 0;

		    $result = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC");

		    $total = mysqli_num_rows($result);

		    $pages = ceil($total/$halperpage);            
		      
		    $query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC LIMIT $mulai, $halperpage") or die();
		      
		    $no = $mulai+1;

		    while ($data = mysqli_fetch_assoc($query)) 
		    {
		    ?>
		    <table width="100%">
		        <tr>
		          	<td width="40px"><?php echo $no++; ?></td>
		          	<td><?php echo $data['nama_kategori']; ?></td>
		          	<td width="250px">
		          		<?php
		          		echo "
		          		<a class='btn btn-info btn-md' href='?m=kategori&tipe=edit&id=$data[id_kategori]'>Edit</a>
						<a class='btn btn-info btn-md' href='modul/kategori/hapus.php?id=$data[id_kategori]' onClick='return confirm(\"anda yakin menghapus?\")'>Hapus</a>
						";
						?>
					</td>                             
		        </tr>
		    </table>
		    <?php               
		    } 
		    ?>
		    <hr>
	      	<nav aria-label="Page navigation example">
			  	<ul class="pagination">
			  		<?php if ($page>1) {?>
			  			<li class="page-item">
				    	  	<a class="page-link" href="?m=kategori&halaman=<?php echo $prev; ?>" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
				      		</a>
				    	</li>
			  		<?php } ?>
			    	
			    	<?php if ($total>$halperpage) {
			    		for ($i=1; $i<=$pages ; $i++){?>
	        			<li class="page-item"><a class="page-link" href="?m=kategori&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
	        			<?php }
			    	} ?>
			    	

	        		<?php if ($page<$pages) { ?>
	        			<li class="page-item">
					      	<a class="page-link" href="?m=kategori&halaman=<?php echo $next; ?>" aria-label="Next">
					        	<span aria-hidden="true">&raquo;</span>
					        	<span class="sr-only">Next</span>
					      	</a>
					    </li>
	        		<?php } ?>
			  	</ul>
			</nav>    
	  	</div> 
	<?php
	}
?>