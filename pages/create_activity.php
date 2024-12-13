<?php 
    require '../config/db.php';

    $nom_activite = $_POST['activity-name'];
    $description = $_POST['description'];
    $capacite = $_POST['capacite'];
    $start_date = $_POST['start-date'];
    $end_date = $_POST['end-date'];

    $requet = "INSERT INTO activites(nom_activite,description,capacite,date_debut,date_fin) 
                VALUES('$nom_activite','$description','$capacite','$start_date','$end_date')";
    $query = mysqli_query($conn, $requet);

    if(isset($query)){
        header("Location: dashboard.php");
        exit();
    }else{
        echo "Failed Query !";
    }

?>