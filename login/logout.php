<?php
session_start();
session_destroy();
header("Location: logiin.php");
exit();
?>
