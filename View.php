<?php include('config/db_connect.php'); 
	if(isset($_POST['delete'])){
		$id_to_delete = mysqli_real_escape_string($con,$_POST['id_to_delete']);
		$sql = "DELETE FROM maklumat WHERE id = '$id_to_delete'";
		if(mysqli_query($con,$sql)){
				header('Location: Search.php');
			}else{
				echo 'query error '.mysqli_error($con);
			}
	}
	if(isset($_GET['id'])){
		$id = mysqli_real_escape_string($con, $_GET['id']);
		$sql = "SELECT * FROM maklumat WHERE id = '$id'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);	
		mysqli_free_result($result);
		mysqli_close($con);
	};
?>

<!DOCTYPE html>
<html lang="en">
	<?php include('header.php'); ?>
<li class="nav-item">
    <a class="nav-link px-3" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link px-3" href="Add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active px-3" href="Search.php" >View</a>
  </li>
</ul>
</div>
</div>
</nav>

<div class="container">
	<?php if($data): ?>
		<table class="table">
	<h2 class="pt-5 pb-3 text-white">Maklumat Diri</h2>
	<thead class="thead-dark">
    <tr>
    <th scope="col" class="bg-dark">Nama Penuh</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama_penuh']); ?></th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-white">
     <th scope="col" class="bg-dark">No. Kad Pengenalan</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['ic']); ?></th>
    </tr>
    <tr class="text-white">
     <th scope="col" class="bg-dark">Jantina</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['jantina']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Alamat</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['alamat']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Kediaman</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['kediaman']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Nama Panggilan Kampung</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama_kampung']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">No. HP</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no_hp']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">No. Tel Rumah</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no_t']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Berhasrat Untuk</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['hasrat']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Ahli Khairat Kematian Masjid Abidin Mukim Sg Laka</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['ahli_khairat']); ?></th>
    </tr>
	   <tr class="text-white">
     <th scope="col" class="bg-dark">Solat Jumaat di</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['solat_jumaat']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Nama zon dalam khariah</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama_zon']); ?></th>
    </tr>
	   <tr class="text-white">
     <th scope="col" class="bg-dark">Pekerjaan</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['pekerjaan']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Status</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['status_diri']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Pendapatan (RM)</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['pendapatan']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Kemahiran Diri</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['kemahiran_diri']); ?></th>
    </tr>

  </tbody>
</table>	
<table class="table" style="">
		<h2 class="py-3 text-white">Maklumat Ahli Keluarga</h2>
  <tbody>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Nama Isteri/Suami</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama_suami_isteri']); ?></th>
    </tr>
	   <tr class="text-white">
     <th scope="col" class="bg-dark">Pekerjaan Isteri/Suami</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['pekerjaan_suami_isteri']); ?></th>
    </tr>
	  <tr class="text-white">
     <th scope="col" class="bg-dark">Pendapatan (RM)</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['pendapatan_suami_isteri']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">Bil. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['bil_anak']); ?></th>
   	  </tr>
	  	   <tr class="text-white">
     	<th scope="col" class="bg-dark">Menerima Bantuan</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['menerima_bantuan']); ?></th>
      </tr>
	   <tr class="text-white">
     <th scope="col" class="bg-dark">Jenis Bantuan</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['jenis_bantuan']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Tempoh</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['tempoh']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no1']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama1']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur1']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti1']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no2']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama2']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur2']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti2']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no3']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama3']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur3']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti3']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no4']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama4']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur4']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti4']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no5']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama5']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur5']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti5']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no6']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama6']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur6']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti6']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no7']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama7']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur7']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti7']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no8']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama8']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur8']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti8']); ?></th>
    </tr>
	  <tr class="text-white">
		<th scope="col" class="bg-dark">No. Anak</th>
      	<th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['no9']); ?></th>
      </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Nama Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['nama9']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Umur Anak</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['umur9']); ?></th>
    </tr>
	  <tr class="text-white">
<th scope="col" class="bg-dark">Sekolah/Kolej/Universiti</th>
      <th scope="col" class="bg-secondary"><?php echo htmlspecialchars($data['sekolah_kolej_universiti9']); ?></th>
    </tr>
	    </tbody>
</table>
<div class="form-row">
				<div class="form-group">
						<button type="button" class="btn btn-primary mt-3 mr-3" name="button" data-toggle="modal" data-target="#exampleModalEdit" style="width: 100px; margin-bottom: 100px;" >Edit</button>
						<button type="button" class="btn btn-warning mt-3" name="button" data-toggle="modal" data-target="#exampleModalDelete" style="width: 100px; margin-bottom: 100px; " >Delete</button>
					</div>
			</div>
<div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelEdit">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Do you want to proceed to edit information?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
		  <a href="Edit.php?id=<?php echo $data['id']?>" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>
<form action="View.php" method="post">
	<div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelDelete">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Do you confirm to delete this existing information?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
		<input type="hidden" name="id_to_delete" value="<?php echo $data['id']?>">
        <button type="submit" class="btn btn-primary" name="delete" id="Delete">Yes</button>
      </div>
    </div>
  </div>
</div>	
</form>

	<?php else: ?>
		<div class="display-1 text-center text-white my-5 py-5">No Information</div>
	<?php endif; ?>
		
</div>
		<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
	<script src="js/myJS.js"></script>
	<?php include('footer.php'); ?>
	
</html>