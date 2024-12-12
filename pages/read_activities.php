<table class="min-w-full divide-y divide-gray-200">
    <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacité</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Debut</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Debut</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Disponibilité</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
    </tr>
<?php

    include '../config/db.php';

    $requete = "SELECT * FROM activites";
    $query = mysqli_query($conn,$requete);

    while($rows=mysqli_fetch_assoc($query)){
        echo "<tr class='bg-white divide-y divide-gray-200'>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['nom_activite']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['description']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['capacite']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['date_debut']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['date_fin']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['disponibilite']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>
                <button class='px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out'>Edit</button>
                <button class='ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out'>Delete</button>
                </td>";
        echo "</tr>";
    }

?>
</table>