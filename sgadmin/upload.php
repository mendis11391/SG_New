<?php include_once 'config.php'; ?>
<?php
session_start();
if(!isset($_SESSION["adusername"])){
  header("Location: index.php");
}
?>
<?php
if (!empty($_GET['folder'])) {
$_SESSION["sgfoldername"] = $_GET['folder'];
}
?>
<?php
if(isset($_POST['upload']))
{    
     
	$file = $_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
  $folder="uploads/".$_SESSION["sgfoldername"]."/";
  $now = new DateTime();
  $datetime = $now->format('Y-m-d');
  $comment = $_POST['uploadcomments'];
  $target_file = $folder . basename($_FILES["file"]["name"]);
  $belongsto = $_SESSION["sgfoldername"];

	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	//$final_file=str_replace($new_file_name);
	if (file_exists($target_file)) {
    ?>
<script>
		alert('File already exists');
        window.location.href='upload.php';
        </script>
        <?php
  }
  else{
		$sql="INSERT INTO files (filename,belongsto,size,created,comments) VALUES('$new_file_name','$belongsto','$new_size','$datetime','$comment')";
	  $query = mysqli_query($mysqli,$sql);
	if(move_uploaded_file($file_loc,$folder.$new_file_name))
	{
		?>
		<script>
        window.location.href='upload.php';
        </script>
		<?php
	}
  else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='upload.php';
        </script>
		<?php
	}
  }
	
}
?>

<?php
function human_filesize($bytes, $decimals = 2) {
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " " . @$size[$factor];
}

?>

<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="col-md-12">
        <label class="successmsg"></label>
        <form class="form-inline" role="form" method="post" action="upload.php"  enctype="multipart/form-data">
          <div class="col-md-5">
            <div class="form-group" style="float: right;">
              <label>Comments: </label>
              <input type="text" name="uploadcomments" id="uploadcomments" class="form-control">
            </div>
          </div>   
          <div class="form-group">
            <input type="file" name="file" id="file" class="form-control">
          </div>

          <button type="submit" class="btn btn-default upload" name="upload">Upload</button>
          <button type="button" class="btn btn-default">Cancel</button>
        </form>
      </div>
    
    <div class="row">
    <div class="col-md-12 box" style="margin-top: 30px;">
    <div class="">
      <h2 id="currentfoldernamelabel"><?php echo $_SESSION['sgfoldername'] ?></h2>
      <input type="hidden" id="currentfoldername">
    </div>

    <br/>
    <table class="table table-striped displayfiles" id="downloadsList">
    <thead>
      <tr>
        <th>Id</th>
        <th>File Name</th>
        <th>Size</th>
        <th>Date Uploaded</th>
        <th>Comments</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql="SELECT * FROM files where belongsto='$_SESSION[sgfoldername]'";
      $result_set=mysqli_query($mysqli,$sql);
      while($row=mysqli_fetch_array($result_set))
      {
    ?>
      <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['filename'] ?></td>
      <td><?php echo human_filesize(filesize('uploads/'.$_SESSION['sgfoldername'].'/'.$row['filename'])); ?></td>
      <td><?php echo $row['created'] ?></td>
      <td><?php echo $row['comments'] ?></td>
      <td><a href="javascript:void(0)"><i class="fa fa-trash-o deletefile" aria-hidden="true"></i></a></td>
      </tr>
    <?php
      }
    ?>
    
    </tbody>
  </table>
  </div>
  </div>
  </section>
  
</div><!-- /. Main content-wrapper -->
      
<?php include 'footer.php' ?>