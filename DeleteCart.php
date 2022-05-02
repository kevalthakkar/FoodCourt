<?php
    require_once 'MyClass.php';
    $ob=new MyClass();
    $n=$ob->deleteCartDetail($_REQUEST["id"]);
    if($n>0){
        header("location:FoodOrder.php");
    }
    
?>
