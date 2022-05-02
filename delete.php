<?php
     require_once 'MyClass.php';
    $ob=new MyClass();
    $r=$ob->delete($_REQUEST["id"]);
    if($r)
        header("location:ShowEntry.php");
    else
        echo 'Error';
?>
