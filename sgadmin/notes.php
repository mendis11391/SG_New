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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createFolderModal">Create Folder</button>
      </div>
    </section>
    <!-- /.content -->
       <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Folders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"><?php
          $conn = $mysqli;
          $sql="SELECT * FROM folders ORDER BY created DESC";
          $result_set=mysqli_query($mysqli,$sql);
          while($row=mysqli_fetch_array($result_set))
          {
        ?>
          <div class="col-sm-3 wow fadeInDown" style="text-align: center;">
            <a <?php echo "href='upload.php?folder=$row[foldername]'" ?> class="folderLink"><image src="../img/folder.png" width="100" <?php echo "class=" . $row['foldername'] . ">";?>
        <br /><span <?php echo "class=" . $row['foldername'] . ">"; ?>
            <div class="service-info">
              <h4>
                <?php
                  echo $row['foldername'];
                ?>
              </h4>
            </div></a>
          </div>
		  <?php
        }
      ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

 
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- Modal -->
<div id="createFolderModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New Folder</h4>
      </div>
      <div class="modal-body">
		<form method="post">
		  <div class="form-group">
			<label for="email">Folder Name</label>
			<input type="text" class="form-control" id="folderName"/>
		  </div>
		  
		  <div class="form-group">
			<button type="button" class="btn btn-success" id="createFolder">Create</button>
		  </div>
		  
		</form>
     </div>
    </div>

  </div>
</div>
  </div>

<?php include 'footer.php' ?>
<?php include 'usercount.php' ?>