<?php
unset($_SESSION['email']);
unset($_SESSION['password']);
header("location:index.php");
?>