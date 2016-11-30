<?php include 'config.php'; ?>
<?php
$conn = $mysqli;
$folderName = $_POST["folderName"];
$datetime = date_create()->format('Y-m-d H:i:s');
$datetime = date("Y-m-d h:i:s", strtotime('+4 hours +30 minutes'));

    //get the current working directory.
    $curdir= getcwd();
    //append the "upload" folder which already exits in ur working directory alog with the new directory name  "$newfolder"
    $dir= $curdir."\uploads"."/$folderName";
    //check if directory exits
    if(is_dir($dir))
    {
        echo " Directory exists";
    }
    else
    {
        $sql = "insert into folders (foldername,created) values ('$folderName','$datetime')";
        $conn->query($sql);
        //create new directory recursively
        mkdir($dir,0777,true);
        echo " Directory Created";
    }

?>