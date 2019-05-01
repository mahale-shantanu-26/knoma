<?php
session_start();
session_unset();
session_destroy();
header("Location: ../knoma/login_signup_c.php?logout=success");
?>