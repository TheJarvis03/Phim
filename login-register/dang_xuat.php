<?php
    include("../config/connect.php");
    session_start();
    unset( $_SESSION["email"]  );
    // xóa session email 
    header("location:../index.php");
?>