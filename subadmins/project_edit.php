<?php
include('../includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query="SELECT * FROM project WHERE id='$id'";
$query_run=mysqli_query($conn,$query);
$row=mysqli_fetch_array($query_run);
}
?>
<form action="#" method="POST">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Project</h6>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Project name</label>
                <input type="text" name="prname" class="form-control" value="<?php echo $row['prname']; ?>">
              </div>
              <div class="form-group">
                <label>Project description</label>
                <input type="text" name="prdescription" class="form-control" value="<?php echo $row['prdescription']; ?>">
              </div>
              <div class="form-group">
                <label>Payment in $</label>
                <input type="number" name="payment" class="form-control" value="<?php echo $row['payment']; ?>">
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
              </div>
              <div class="form-group">
                <label>Employees</label>
                <input type="number" name="employees" class="form-control" value="<?php echo $row['employees']; ?>">
              <div class="form-group">
                <label>Start day</label>
                <input type="date" name="startday" class="form-control" value="<?php echo $row['startday']; ?>">
              </div>
              <div class="form-group">
                <label>End day</label>
                <input type="date" name="finishday" class="form-control" value="<?php echo $row['finishday']; ?>">
              </div>
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <input type="submit" name="update" value="Update" class="btn btn-primary">
            </div>
          </div>
        <?php
        if(isset($_POST['update']))
        {
        $id=$_POST['id'];
        $prname=$_POST['prname'];
        $prdescription=$_POST['prdescription'];
        $payment=$_POST['payment'];
        $address=$_POST['address'];
        $employees=$_POST['employees'];
        $startday=$_POST['startday'];
        $finishday=$_POST['finishday'];
        $query="UPDATE project SET prname='$prname', prdescription='$prdescription', payment='$payment', address='$address', employees='$employees', startday='$startday', finishday='$finishday' WHERE id='$id'";
        $query_run=mysqli_query($conn,$query);
        if($query_run)
        {
            header('location: projects_taken.php');
        }
        
        }
        ?>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>