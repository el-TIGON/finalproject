<?php
session_start();
if( !isset( $_SESSION['username_login']) )
{
    header("Location: login.php");
    exit();
}else{
include('../includes/config.php');
include('includes/header.php');
include('includes/navbar.php');

?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  
                </nav>
                <div class="container-fluid">

                    <!-- Page Heading -->
  <div class="modal fade" id="addadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>         
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="regisdb.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> username </label>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
        
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" placeholder=" ">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="regbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadmin">
       Add Admin
</button>
</div>
<div class="card-body">

    <div class="table-responsive">
    <?php
						if (isset($_SESSION['status']))
						{
							echo '<div class="alert alert-success">'.$_SESSION['status'].'</div>';
							unset($_SESSION['status']);
						}
						?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID </th>
            <th>username </th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM  registration";
            $query_run = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($query_run)){
                $id = $row['reg_id'];
                $username = $row['username'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$username.'</td>
                <td><a href="regis_delete.php?reg_id='.$id.'" class="btn btn-danger">Delete</a></td>
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
}
?>