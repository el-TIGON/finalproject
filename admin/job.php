<?php
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
                    <h1 class="h3 mb-2 text-gray-800">Table for service providers jobs requists</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Applicants</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>first Name </th>
                                            <th>last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Education</th>
                                            <th>Service</th>
                                            <th>CV</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `employees`";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>
                                                <td>" . $row['emp_id'] . "</td>
                                                <td>" . $row['firstname'] . "</td>
                                                <td>" . $row['lastname'] . "</td>
                                                <td>" . $row['email'] . "</td>
                                                <td>" . $row['phone'] . "</td>
                                                <td>" . $row['address'] . "</td>
                                                <td>" . $row['education'] . "</td>
                                                <td>" . $row['service'] . "</td>
                                                <td>" . $row['cv'] . "</td>
                                                <td> <a href='job_delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>
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
include ('includes/footer.php');
include ('includes/scripts.php');
?>
         