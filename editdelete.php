<?php 
    $iid=$_GET['iid'];
    $action=$_GET['action'];
    switch($action){
        case "edit":
            {
                echo"editing data";
                break;
            }
        case "delete":
            {
                $sql="DELETE from inquiry WHERE id=$iid ";
                include("connection.php");
                $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($qry){
                    header("Location:fetch.php");
                }
                break;
            }
        default:{
            echo"unable to process the comand";
        }
    }
    




?>

