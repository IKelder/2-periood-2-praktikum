<?php
  header("Location: new_page.php");
  exit;
?>
<?php require('components/site-functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
<?php include('components/html-head.php'); ?>
</head>
<body>
<?php
 echo hello();
 ?>
</body>
</html>