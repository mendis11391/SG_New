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
    <!-- /.content -->
       <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pending Approvals</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userList" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th><i class="fa fa-gear"></i> Approve</th>
                  <th><i class="fa fa-gear"></i> Delete</th>
                </tr>
                </thead>
                <tbody data-bind="foreach:pendinguserapprovals">
                <tr>
                  <td data-bind="text:username">No Data Received</td>
                  <td data-bind="text:email">No Data Received</td>
                  <td  data-bind="text:phonenum"> No Data Received</td>
                  <td><a href="javascript:void(0)" class="userapproval">Add User</a></td>
                  <td><a href="javascript:void(0)" class="deletepuser">Delete</a></td>
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