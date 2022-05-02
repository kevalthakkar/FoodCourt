<html>
    
        <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>registration</title>
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
        <h1>Registration</h1>
        <form method="POST">
            <table >
                <tr>
                    <td>UserName:</td>
                    <td><input type="text" name="txtunm" value="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="txtpwd" value="" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="txtmail" value="" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Mobile No:</td>
                    <td><input type="number" name="txtmno" value="" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Birth Date:</td>
                    <td><input type="date" name="txtbdate" value="" class="form-control"/></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td> <input type="submit" value="submit" name="submit" class="btn btn-outline-primary"></td>
                </tr>
            </table>
            <br><br>
            <a href="Login.php"><h2 class="fa fa-sign-in-alt">Login</h2></a>
            
           
        </form>
    </body>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
</html>
<?php
    
    require_once 'MyClass.php';
    $ob=new MyClass();
    $n=0;
    $cou=0;
    if(isset($_REQUEST["submit"]))
    {
        $c=$ob->profile($_REQUEST["txtunm"]);
        foreach ($c as $c){
            $cou+=1;
        }
        if($cou>0){
            echo '<h3 style="color:red">User Is Already Exist <h3>';
        }
        else{
            $n=$ob->registeration($_REQUEST["txtunm"], $_REQUEST["txtpwd"], $_REQUEST["txtmail"], $_REQUEST["txtmno"], $_REQUEST["txtbdate"]);
        if($n>0){
            echo '<h3 style="color:red">Successfully Registration <h3>';
            header("location:Login.php");
        }
        else{
            echo '<h3 style="color:red">Error <h3>';
        }
        }
      
        
    }
    
?>
