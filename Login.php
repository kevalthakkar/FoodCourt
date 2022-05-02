<html>
    
        <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
        <h1>Login</h1>
        <br>
        <form method="POST">
            <table class="form-group" >
                <tr>
                    <td>UserName:</td>
                    <td><input type="text" name="txtunm" value="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="txtpwd" value="" class="form-control"/></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td> <input type="submit" value="Login" name="submit" class="btn btn-primary"></td>
                </tr>
            </table>
            <br><br>
            <a href="Registration.php"><h2 class="fa fa-user-plus">Sign-Up</h2></a>
            
           
        </form>
    </body>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
</html>
<?php
    session_start();
    require_once 'MyClass.php';
    $ob=new MyClass();
    $n=0;
    if(isset($_REQUEST["submit"]))
    {
        if($_REQUEST["txtunm"]=="Admin" || $_REQUEST["txtunm"]=="admin" && $_REQUEST["txtpwd"]=="Admin" || $_REQUEST["txtpwd"]=="admin"){
            
            $_SESSION["unm"]=$_REQUEST["txtunm"];
            header("location:AdminHome.php");
        }
        else{
        $c=$ob->login($_REQUEST["txtunm"],$_REQUEST["txtpwd"]);
        
        foreach ($c as $c){
            $n+=1;
        }
        if($n>0){
            $_SESSION["unm"]=$_REQUEST["txtunm"];
             echo '<h3 style=color:red> Successfully Login  </h3>';
             header("location:home.php");
        }
        else{
            echo '<h3 style=color:red> Username or Password is Wrong </h3>';
        }
        }
    }
?>