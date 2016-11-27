<?php include_once 'config.php'; ?>
<?php
session_start();
if(!isset($_SESSION["adusername"])){
  header("Location: index.php");
}
?>
<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

<style>
		.copied{
			display:none; 
			position: fixed; 
			text-align: center; 
			font-size: 33px; 
			color: red; 
			text-shadow: 5px 5px 10px #222;
		}

    .copybatchdetail:hover{
      cursor:pointer;
    }
	</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 800px;">
    <div class="col-md-12">
		<div class="bg-success">
			<h3 style="padding: 5px;">Click on any of the below text to copy</h3>
      <label class="copybatchdetail" style="padding: 10px;">January 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">February 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">March 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">April 10th 7:00 AM to 9:00 AM</label><p>
      <label class="copybatchdetail" style="padding: 10px;">May 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">June 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">July 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">August 10th 7:00 AM to 9:00 AM</label><p>
      <label class="copybatchdetail" style="padding: 10px;">September 10th 7:00 AM to 9:00 AM</label>
			<label class="copybatchdetail" style="padding: 10px;">October 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">November 10th 7:00 AM to 9:00 AM</label>
      <label class="copybatchdetail" style="padding: 10px;">December 10th 7:00 AM to 9:00 AM</label>
		</div><br/>

        <form class="form" role="form" method="post" action="">
        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <label>Morning Regular Batch: </label>
              <input type="text" name="morningbatch" id="morningbatch" class="form-control">
            </div>
          </div>
        </div>
        <div class="alert copied col-md-3" role="alert">
			  <strong>COPIED!</strong> 
			</div>
          <div class="col-md-12" style="margin-top:10px">
          <div class="col-md-6">
            <div class="form-group">
              <label>Evening Regular Batch: </label>
              <input type="text" name="eveningbatch" id="eveningbatch" class="form-control">
            </div>
          </div>
          </div>
		  <div class="col-md-12" style="margin-top:10px">
          <div class="col-md-6">
            <div class="form-group">
              <label>Weekend Batch: </label>
              <input type="text" name="weekendbatch" id="weekendbatch" class="form-control">
            </div>
          </div>
          </div>
          <div class="col-md-5">
          <button type="button" class="btn btn-primary updatebatch" name="updatebatch">Update</button>
          </div>
        </form>
      </div>
  
</div><!-- /. Main content-wrapper -->
      

<?php include 'footer.php' ?>