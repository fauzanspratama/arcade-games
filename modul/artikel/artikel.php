<?php
if(isset($_GET['tipe'])){
	// Modul tambah artikel
	if($_GET['tipe']=='tambah'){
		echo "
			<h3>Buat Artikel</h3>
			<hr>
			<form method='POST' action='modul/artikel/tambah.php'>
				<table width='100%'>
					<tr width='100%'>
						<td>Judul</td>
						<td><input type='text' name='judul' value='' /></td>
						<td width='250px'>
							<button class='btn btn-info btn-md' type='submit'>SIMPAN</button>
							<button class='btn btn-info btn-md' type='button' onClick='history.back();'>BATAL</button>
						</td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>
							<select name='kategori'>";
							$sql=mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY nama_kategori ASC");
							while ($k=mysqli_fetch_array($sql)) {
								echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
							}
							echo "</select>
						</td>
						<td></td>
					</tr>
				</table>
				<div><hr>
					<textarea name='isi' id='default'></textarea>
				</div><hr>
			</form>";
	// Modul edit artikel
	}elseif ($_GET['tipe']=='edit') {
		$sql=mysqli_query($koneksi,"SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
		$de=mysqli_fetch_array($sql);
		echo "
			<h3>Edit Artikel</h3>
			<hr>
			<form method='POST' action='modul/artikel/edit.php'>
				<input type='hidden' name='id' value='$de[id_artikel]' />
				<table width='100%'>
					<tr width='100%'>
						<td>Judul</td>
						<td><input type='text' name='judul' value='$de[judul]' /></td>
						<td width='250px'>
							<button class='btn btn-info btn-md' type='submit'>SIMPAN</button>
							<button class='btn btn-info btn-md' type='button' onClick='history.back();'>BATAL</button>
						</td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>
							<select name='kategori'>";
							$sql=mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY nama_kategori ASC");
							while ($k=mysqli_fetch_array($sql)) {
								echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
							}
							echo "</select>
						</td>
						<td></td>
					</tr>
				</table>
				<div><hr>
					<textarea name='isi'>$de[isi]</textarea>
				</div><hr>
			</form>";
	}
}else{
	?>
		<h2>Manajemen Artikel</h2><hr>
		<a class="btn btn-info btn-md" href="?m=artikel&tipe=tambah">Buat Baru</a>
		<div width="100%" style="padding-top: 20px; padding-bottom: 20px;">
			<hr>
	      	<table width="100%">
	      		<tr>
	        		<th width="40px">No.</th>
					<th width="150px">Tanggal dibuat</th>
					<th>Judul Artikel</th>
					<th width="250px">Kategori</th>
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

		    $result = mysqli_query($koneksi,"SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori=kategori.id_kategori ORDER BY id_artikel DESC");

		    $total = mysqli_num_rows($result);

		    $pages = ceil($total/$halperpage);            
		      
		    $query = mysqli_query($koneksi,"SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori=kategori.id_kategori ORDER BY id_artikel DESC LIMIT $mulai, $halperpage")or die(mysqli_error);
		      
		    $no = $mulai+1;

		    while ($data = mysqli_fetch_assoc($query)) 
		    {
		    ?>
		    <table width="100%">
		        <tr>
		          	<td width="40px"><?php echo $no++; ?></td>
		          	<td width="150px"><?php echo $data['tanggal']; ?></td>                   
		          	<td><?php echo $data['judul']; ?></td>
		          	<td width="250px"><?php echo $data['nama_kategori']; ?></td>
		          	<td width="250px">
		          		<?php
		          		echo "
		          		<a class='btn btn-info btn-md' href='?m=artikel&tipe=edit&id=$data[id_artikel]'>Edit</a>
						<a class='btn btn-info btn-md' href='modul/artikel/hapus.php?id=$data[id_artikel]' onClick='return confirm(\"anda yakin menghapus?\")'>Hapus</a>
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
				    	  	<a class="page-link" href="?m=artikel&halaman=<?php echo $prev; ?>" aria-label="Previous">
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
					      	<a class="page-link" href="?m=artikel&halaman=<?php echo $next; ?>" aria-label="Next">
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