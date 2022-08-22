<?php
session_start();
if( !isset( $_SESSION['username']) )
{
    header("Location: login.php");
    exit();
}else{
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
                    <div>
                    <h1 class="h3 mb-2 text-gray-800">Table for clients</h1>
                    <a href="request_report.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <?php  if (isset($_SESSION['status']))
						{
							echo '<div class="alert alert-success">'.$_SESSION['status'].'</div>';
							unset($_SESSION['status']);
						}
						?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data of the client</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                          
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Service</th>
                                            <th>Date</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `book`";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "
                                                    <tr>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>" . $row['email'] . "</td>
                                                    <td>" . $row['mobile'] . "</td>
                                                    <td>" . $row['address'] . "</td>
                                                    <td>" . $row['service'] . "</td>
                                                    <td>" . $row['date'] . "</td>
                                                    <td> <a href='client_delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>
                                                    <td> <a href='prdb.php?id= " . $row['id']. "' class='btn btn-primary'>Take</a></td>
                                                    </tr>";
                                            }
                                            ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
include ("includes/footer.php");
include ("includes/scripts.php");
}
?>