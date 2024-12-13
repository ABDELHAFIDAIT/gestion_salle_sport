<?php
    require '../config/db.php';

    $id = $_GET['id'];

    $requet = "DELETE FROM activites WHERE id_activite='$id'";

    $query = mysqli_query($conn,$requet);

    if($query) {
        header("location: dashboard.php");
    }else{
        echo "Query Failed";
    }
?>