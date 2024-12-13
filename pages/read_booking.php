<table class="min-w-full divide-y divide-gray-200">
    <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom Activité</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Réservation</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Réservation</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
    </tr>
<?php

    include '../config/db.php';

    $requete = "SELECT M.id_membre,nom,prenom,nom_activite,date_reservation,status_reservation 
                FROM activites A 
                JOIN reservations R ON A.id_activite=R.id_activite 
                JOIN membres M ON M.id_membre = R.id_membre
                ORDER BY M.id_membre;";
    $query = mysqli_query($conn,$requete);

    while($rows=mysqli_fetch_assoc($query)){
        echo "<tr class='bg-white divide-y divide-gray-200'>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['nom']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['prenom']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['nom_activite']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['date_reservation']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['status_reservation']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>
                <button class='px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out'>Edit</button>
                <button class='ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out'>Delete</button>
                </td>";
        echo "</tr>";
    }

?>
</table>