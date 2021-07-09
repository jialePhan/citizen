<?php
	include('config/db_connect.php');

$sql = "SELECT * FROM maklumat ORDER BY created_at";
$result = mysqli_query($con, $sql);
$datas = mysqli_fetch_all($result, MYSQLI_ASSOC);	
mysqli_free_result($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<li class="nav-item">
    <a class="nav-link px-3" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link px-3" href="Add.php" >Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active px-3" href="Search.php">View</a>
  </li>
</ul>
</div>
</div>
</nav>
<div class="container">
		<div class="row">
			<?php foreach($datas as $data){ ?>
			<div class="mx-4">
				<div class="card text-center" style="width: 18rem; margin-top: 5rem">
  			<div class="card-body">
    			<h5 class="card-title"><?php echo htmlspecialchars($data['nama_penuh']); ?></h5>
    			<h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($data['ic']); ?></h6>
    			<p class="card-text"></p>
   				<a href="View.php?id=<?php echo $data['id']?>" class="btn btn-primary">View</a>
  			</div>
			</div>
			</div>
		<?php } ?>
	</div>
</div>
	

	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.3.1.js"></script>
	<script src="js/myJS.js"></script>


<?php include('footer.php'); ?>
	
</html>