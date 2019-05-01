<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Welcome, ".$_SESSION['user_name']." to Knoma";
?>
</body>
</html>
