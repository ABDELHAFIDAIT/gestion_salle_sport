<?php
    require '../config/db.php';

    $id = $_GET['id'];

    $requet = "DELETE FROM reservations WHERE id_reservation='$id'";

    $query = mysqli_query($conn,$requet);

    if($query) {
        header("location: dashboard.php");
    }else{
        echo "Query Failed";
    }
?>