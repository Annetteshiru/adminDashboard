<?php
require_once('logics/dbconnection.php');

// count all enrolled studentd
$queryAllStudents = mysqli_query($conn,"SELECT *FROM enrollment");
$countAllStudents = mysqli_num_rows($queryAllStudents); 

//count by gender

$queryAllFemale = mysqli_query($conn,"SELECT * FROM enrollment WHERE gender='Female'");
$countAllFemale = mysqli_num_rows($queryAllFemale);



?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	
	


	</div>
	<div class="sidebar">
		<?php require_once('includes/sidebar.php') ?>
		
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row pt-3">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
						<div class="card-body">
							<span><i class="fa fa-group"></i></span>
							<span class="float-right badge badge-dark"><?php echo $countAllStudents ?></span>
						</div> 
						<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available courses</span>
					</div>
						<div class="card-body">
							<span><li class="fa fa-folder-open "></li></span>
							<span class="float-right"><?php echo $countAllFemale ?></span>
						</div>
						<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>campuses</span>
					</div>
						<div class="card-body">
							<span><li class="fa fa-graduation-cap"></li></span>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
				</div>
			
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>users</span>
					</div>
						<div class="card-body">
							<span><li class="fa fa-group"></li></span>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
				</div>
				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
								<div class="card-body"></div>
								<div class="card-footer"></div>
				</div>
			</div>
		
		</div>
	</div>

	
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>