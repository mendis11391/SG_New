<?php include_once 'config.php'; ?>

<?php

$conn = $mysqli;

  $sql = "DELETE FROM files WHERE id='{$_POST[id]}'";
  //$file = $_POST[filename];
  unlink('uploads/'.$_POST['currentfoldername'].'/'.$_POST['filename']);
    

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo $_POST['currentfoldername']. " ". $_POST['filename'];
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

  