<?php
  header("Location: http://www.neti.ee.");
  exit;
?>
<!DOCTYPE html>
<html>
<body>
<?php
    function hello($argument="Ingrid") {
        echo "Hello {$argument}";
    }

?>
<?php
    function redirect_to($uus_aadress="https://www.youtube.com/") {
    		header("Location: " . $uus_aadress);
    	}
    	?>
</body>
</html>