<?php
session_start();
session_unset();
session_destroy();
header("location: ../Final_Exam_Practice/index.php");
?>