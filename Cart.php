<?php
    session_start();
    if($_SESSION["unm"]==""){
        header("location:Login.php");
    }
    $user=$_SESSION["unm"];
    require_once 'MyClass.php';
    $ob=new  MyClass();
    ?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div>
        <center><a href="index.php"><h2 class="fa fa-home"> Home</h2></a></div><br>
<center><a href="FoodOrder.php"><h2 class="fa fa-table"> Food Order</h2></a></center>
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
  
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="mb-0">My Cart</h1>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td>Items</td>
                                                <td>price</td>
                                                <td>Qty</td>
                                                <td>Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
    
                                        $c=$ob->CartDetail($_SESSION["unm"]);
                                        $gt=0;
                                        foreach ($c as $c){
                                            echo '<tr>';
                                            echo '<td>';
                                            echo $c->name;
                                            echo '</td>';
                                            echo '<td>';
                                            echo $c->price;
                                            echo '</td>';
                                            echo '<td>';
                                            echo $c->qty;
                                            echo '</td>';
                                            echo '<td>';
                                            echo $c->total;
                                            echo '</td>';
        
                                            echo '</tr>';
                                            $gt+=$c->total;
        
                                        } 
    
                                        ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <td></td>
                                             <td></td>
                                             <td>Grand Total</td>
                                             <td style="background-color: #000;color: red"><?php echo $gt; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                                   
                                    
                                </div>
                            </div>
                        </div>
                    <center>    <a href="CheckOut.php" style="color: red;"><input type="submit" value="CheckOut" name="submit" class="btn btn-danger"></h2></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
        </div>
    </div>
    
    <br><br>
            
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    
    
</body>
 
</html>
