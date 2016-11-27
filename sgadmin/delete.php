<?php include_once 'config.php'; ?>

<?php

$conn = $mysqli;
  $sql = "DELETE FROM users WHERE id='{$_POST[id]}'";
  echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>