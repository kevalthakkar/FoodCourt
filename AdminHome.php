<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    if($_SESSION["unm"]==""){
        header("location:Login.php");
    }
?>
<html>
     <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="assets/vendor/inputmask/css/inputmask.css" />
</head>
    <body>   
    <center>
        <br><br>
        <a href="FoodEntry.php"><h2 class="fa fa-table">Food Entry</h2></a><br><br>
        <a href="ShowEntry.php"><h2 class="fa fa-table">Show Entry</a></h2></a><br><br>
        <form>
            <input type="submit" value="LoOut" name="submit" class="btn btn-outline-danger">
        </form>
        
        
    </center>
</body>
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
</html>
<?php
    if(isset($_REQUEST["submit"])){
        $_SESSION["unm"]="";
        header("location:Login.php");
    }

?>