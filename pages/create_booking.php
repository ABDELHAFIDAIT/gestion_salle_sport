<?php 
    require '../config/db.php';

    $nom = $_POST['last-name'];
    $prenom = $_POST['first-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $requet_1 = "INSERT INTO membres(nom,prenom,email,telephone) VALUES('$nom','$prenom','$email','$phone')";
    $query_1 = mysqli_query($conn, $requet_1);

    
    $last_membre_id = mysqli_insert_id($conn);

    
    $activity = $_POST['select-activity'];
    $requet_2 = "SELECT id_activite FROM activites WHERE nom_activite='$activity'";
    $query_2 = mysqli_query($conn, $requet_2);
    if ($query_2) {
        $result = mysqli_fetch_assoc($query_2);
        $id_activite = $result['id_activite'];
    } else {
        echo "Erreur dans la requête !";
    }

    
    
    $requet_3 = "INSERT INTO reservations(id_membre,id_activite,date_reservation) VALUES ('$last_membre_id','$id_activite',CURRENT_DATE)";
    $query_3 = mysqli_query($conn, $requet_3);

    if(isset($query_3)){
        header("Location: dashboard.php");
        exit();
    }else{
        echo "Failed Query !";
    }

?>