<?php
    $name = $_GET['catname'];
    error_reporting(0);
    $link = mysqli_connect("localhost", "root", "", "tbl_blog");
    $status = 'OK';
    $content = [];
    if (mysqli_connect_errno()) {
        $status = 'ERROR';
        $content = mysqli_connect_error();
        }
  
?>
