<?php
session_start();
if(!isset($_SESSION["adusername"])){
  header("Location: index.php");
}
?>

<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="container">
      <div class="col-md-12" style="padding-top: 15px;">
        <a href="../registration.php" class="btn btn-success">Add User</a>
      </div>
    </section>
    <!-- /.content -->
       <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of registered Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userList" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Joined year</th>
                  <th><i class="fa fa-gear"></i> Action</th>
                </tr>
                </thead>
                <tbody data-bind="foreach:userlisting">
                <tr>
                  <td data-bind="text:id">No Data Received</td>
                  <td data-bind="text:username">No Data Received</td>
                  <td data-bind="text:email">No Data Received</td>
                  <td  data-bind="text:phonenum"> No Data Received</td>
                  <td  data-bind="text:regyear">No Data Received</td>
                  <td><a href="javascript:void(0)"><i class="fa fa-trash-o deleteuser" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

 
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>

<?php include 'footer.php' ?>
<?php include 'usercount.php' ?>