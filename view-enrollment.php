<?php
//database connection
require_once('logics/dbconnection.php');
$sqlFetchStudents = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
while($fetchStudentsRecords = mysqli_fetch_array($sqlFetchStudents))
{
    $fullname = $fetchStudentsRecords['fullname'];
    $email = $fetchStudentsRecords['email'];
    $phone = $fetchStudentsRecords['phonenumber'];
    $gender = $fetchStudentsRecords['gender'];
    $course = $fetchStudentsRecords['course'];
    $created_at = $fetchStudentsRecords['created_at'];
}



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
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Personal information</h4>

                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full name: <span class="float-right badge badge-primary"><?php echo $fullname ?></span> </li>
                                <li class="list-group-item">Email: <span class="float-right badge badge-secondary"><?php echo $email ?></span> </li>
                                <li class="list-group-item">Phone : <span class="float-right badge badge-danger"><?php echo $phone?></span> </li>

                            </ul>

                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Other information</h4>

                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">gender: <span class="float-right badge badge-primary"><?php echo $gender ?></span> </li>
                                <li class="list-group-item">course: <span class="float-right badge badge-secondary"><?php echo $course ?></span> </li>
                                <li class="list-group-item">created at : <span class="float-right badge badge-danger"><?php echo $created_at?></span> </li>

                            </ul>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div> 
	</div>

        <?php require_once('includes/scripts.php') ?>
</body>

</html>