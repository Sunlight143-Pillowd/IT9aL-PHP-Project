<?php
session_start();
session_destroy();
header("Location: /assessment_beginner/index.php");
exit();
?>