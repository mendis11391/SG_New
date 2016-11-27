<?php include_once 'config.php'; ?>

<?php

$conn = $mysqli;

  $sql = "DELETE FROM uploads WHERE id='{$_POST[id]}'";
  //$file = $_POST[filename];
  unlink("uploads/".$_POST['filename']);
  
  

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>