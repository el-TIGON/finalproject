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
            <th>Name </th>
            <th>Service</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `service_providers`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>" . $row['ser_id'] . "</td>
                <td>" . $row['ser_name'] . "</td>
                <td>" . $row['ser_service'] . "</td>
                <td>" . $row['ser_address'] . "</td>
                <td>" . $row['ser_email'] . "</td>
                <td>" . $row['ser_phone'] . "</td>
                <td><a href='service_provider_delete.php?id=" . $row['ser_id'] . "' class='btn btn-danger'>Delete</a></td>
                </tr>";
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