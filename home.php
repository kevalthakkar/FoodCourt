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
    <title>User Home</title>
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
        <a href="FoodOrder.php"><h2 class="fa fa-table"> Food Order</h2></a><br><br>
        <a href="MyOrder.php"><h2 class="fa fa-server"> My Order</h2></a><br><br>
        <a href="Cart.php"><h2 class="fa fa-shopping-cart"> Cart</h2></a><br><br>
        <a href="Profile.php"><h2 class="fa fa-user"> Profile</a></h2><br><br>
        <form>
            <input type="submit" value="LogOut" name="submit" class="btn btn-outline-danger">
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