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
    <title>Food Entry</title>
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
        <h1>Food Entry</h1>
        <form method="POST">
            <table >
                <tr>
                    <td>Id:</td>
                    <td><input type="number" name="txtid" value="" class="form-control" /></td>
                </tr>
                
                <tr>
                    <td>Food Name:</td>
                    <td><input type="text" name="txtfnm" value="" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Food Type:</td>
                
                    <td><select name="txtftype" class="form-control"><option>Chinese</option>
                            <option>Maxican</option>
                            <option>Gujarati</option>
                            <option>Punjabi</option>
                            
                        </select></td>
                </tr>
                <tr>
                    <td>Food Price:</td>
                    <td><input type="number" name="txtprice" value="" class="form-control"/></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td> <input type="submit" value="Insert" name="submit" class="btn btn-outline-primary"></td>
                </tr>
            </table>
            <br><br>
            <a href="ShowEntry.php"><h2 class="fa fa-table">Show Entry</h2></a><br>
            <a href="AdminHome.php"><h2 class="fa fa-home">Home</h2></a>
            
           
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
        $c=$ob->foodDataUpdate($_REQUEST["txtid"]);
    foreach ($c as $c){
        $cou+=1;
    }
    if($cou>0){
        echo '<h3 style="color:red">Id Is Already Exist <h3>';
    }
    else{
        $n=$ob->foodInsert($_REQUEST["txtid"], $_REQUEST["txtfnm"], $_REQUEST["txtftype"], $_REQUEST["txtprice"]);
        if($n>0){
            echo '<h3 style="color:red">Successfully Insert <h3>';
            
        }
        else{
            echo '<h3 style="color:red">Error <h3>';
        }
    }
      
        
    }
    
?>
