<?php
    session_start();
    if($_SESSION["unm"]==""){
        header("location:Login.php");
    }
     require_once 'MyClass.php';
    $ob=new MyClass();
    
    $cr=$ob->foodDataUpdate($_REQUEST["id"]);
    
   
        
?>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Food Data</title>
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
        <h1>Food Data Update</h1>
        <form method="POST">
            
            <?php  foreach ($cr as $c){ ?>
            <table>
                <tr>
                    <td>Id:</td>
                    <td><input type="text" name="txtid" value="<?php echo $c->id; ?>" class="form-control" readonly/></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="txtname" value="<?php echo $c->name; ?>" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><select name="txtftype" class="form-control"><option <?php if($c->type=="Chinese"){        echo 'selected';}?>>Chinese</option>
                            <option <?php if($c->type=="Maxican"){        echo 'selected';}?>>Maxican</option>
                            <option <?php if($c->type=="Gujarati"){        echo 'selected';}?>>Gujarati</option>
                            <option <?php if($c->type=="Punjabi"){        echo 'selected';}?>>Punjabi</option>
                            
                        </select></td>
                    
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><input type="number" name="price" value="<?php echo $c->price; ?>" class="form-control"/></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="update" name="submit" class="btn btn-outline-primary"></td>
                </tr>
            </table>
            <br><br>
            <a href="AdminHome.php"><h2 class="fa fa-home"> Home</h2></a>
            <br><br>
            <a href="ShowEntry.php"><h2 class="fa fa-table"> Show Food Data</h2></a>
            
            
        </form>
    </body>
     <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
</html>
    <?php 
    
    } 
    if(isset($_REQUEST["submit"])){
        $r=$ob->update($_REQUEST["txtid"],$_REQUEST["txtname"],$_REQUEST["txtftype"],$_REQUEST["price"]);
        if($r){
            header("location:ShowEntry.php");
            
        }
        else
            echo 'Error';
    }
    
    ?>