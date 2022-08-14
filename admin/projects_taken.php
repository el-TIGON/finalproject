<?php
session_start();
if(!isset($_SESSION['auth']))
{
header("Location: login.php");
}
include('../includes/config.php');
include('includes/header.php');
include('includes/navbar.php');

?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


<div class="card-body">
<?php
						if (isset($_SESSION['status']))
						{
							echo '<div class="alert alert-success">'.$_SESSION['status'].'</div>';
							unset($_SESSION['status']);
						}
						?>
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID </th>
            <th>Project name </th>
            <th>Project description</th>
            <th>Payment in $ </th>
            <th>Address</th>
            <th>start day</th>
            <th>end day</th>
            <th colspan="2" >stutus </th>
          </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM project";
            $query_run = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                $id = $row['id'];
                $prname = $row['prname'];
                $prdescription = $row['prdescription'];
                $payment = $row['payment'];
                $address = $row['address'];
                $startday = $row['startday'];
                $endday = $row['finishday'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$prname.'</td>
                <td>'.$prdescription.'</td>
                <td>'.$payment.'</td>
                <td>'.$address.'</td>
                <td>'.$startday.'</td>
                <td>'.$endday.'</td>
                <td><a href="project_delete.php?id='. $row ['id'] .'" class="btn btn-danger">Delete</a></td>
                <td><a href="project_edit.php?id='. $row ['id'] .'" class="btn btn-primary">Edit</a></td>
                </tr>';
            }
            ?>
        
        </tbody>
      </table>

    </div>
  </div>

              

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
<?php 
include ("includes/footer.php");
include ("includes/scripts.php");
?>