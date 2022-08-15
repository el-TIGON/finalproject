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
                    <h1 class="h3 mb-2 text-gray-800">Table for clients</h1>
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
                                            <th colspan="2">Action</th>
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
                                                    <td> <a href='prdb.php?id= " . $row['id']. "' class='btn btn-primary'>Take</a></td>
                                                    <td> <a href='mail.php?id=" . $row['id'] . "' class='btn btn-success'>send a mail</a></td>
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
?>