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
  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add employee info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="prdb.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Name </label>
                <input type="text" name="Name" class="form-control" placeholder="project name">
            </div>
        
            <div class="form-group">
                <label>Services</label>
                <input type="text" name="service" class="form-control" placeholder="services">
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" name="prdescription" class="form-control" placeholder="descrription">
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
       Add employee info
</button>
</div>
<div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID </th>
            <th>name </th>
            <th>Service </th>
            <th>description</th>
             </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM project";
            $query_run = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                $id = $row['id'];
                $prname = $row['prname'];
                $service = $row['service'];
                $prdescription = $row['prdescription'];
                $payment = $row['payment'];
                $status = $row['status'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$prname.'</td>
                <td>'.$service.'</td>
                <td>'.$prdescription.'</td>
                <td>'.$payment.'</td>
                <td> <a href="project_delete.php?delete='.$id.'" class="btn btn-danger">Delete</a> </td>
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