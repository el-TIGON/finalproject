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
  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add project data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="prdb.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Project name </label>
                <input type="text" name="prname" class="form-control" placeholder="project name">
            </div>
        
            <div class="form-group">
                <label>Services</label>
                <input type="text" name="service" class="form-control" placeholder="services">
            </div>
            <div class="form-group">
                <label>Project description</label>
                <input type="text" name="prdescription" class="form-control" placeholder="descrription">
            </div>
            <div class="form-group">
                <label>Payment</label>
                <input type="number" name="payment" class="form-control" placeholder="payment in $">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add project
</button>
</div>
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
            <th>Service </th>
            <th>Project description</th>
            <th>Payment in $ </th>
            <th>stutus </th>
          </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM project";
            $query_run = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                $id = $row['id'];
                $prname = $row['prname'];
                $service = $row['services'];
                $prdescription = $row['prdescription'];
                $payment = $row['payment'];
                $status = $row['status'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$prname.'</td>
                <td>'.$service.'</td>
                <td>'.$prdescription.'</td>
                <td>'.$payment.'</td>
                <td>'.$status.'</td>
                <td><a href="project_delete.php?id='. $row ['id'] .'" class="btn btn-danger">Delete</a></td>
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