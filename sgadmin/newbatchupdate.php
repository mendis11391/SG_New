<?php include_once 'config.php'; ?>
<?php
  $conn = $mysqli;

  /* User count */
  $sql = "UPDATE updatebatch SET morningbatch='{$_POST[morningbatch]}' WHERE id=1";
  $result = $conn->query($sql);

  $sql = "UPDATE updatebatch SET eveningbatch='{$_POST[eveningbatch]}' WHERE id=2";
  $result = $conn->query($sql);

  $sql = "UPDATE updatebatch SET weekendbatch='{$_POST[weekendbatch]}' WHERE id=3";
  $result = $conn->query($sql);

  $sql = "UPDATE updatebatch SET display='{$_POST[morningbatchdisplay]}' WHERE id=1";
  $result = $conn->query($sql);

  $sql = "UPDATE updatebatch SET display='{$_POST[eveningbatchdisplay]}' WHERE id=2";
  $result = $conn->query($sql);

  $sql = "UPDATE updatebatch SET display='{$_POST[weekendbatchdisplay]}' WHERE id=3";
  $result = $conn->query($sql);

  $conn->close();
?>
