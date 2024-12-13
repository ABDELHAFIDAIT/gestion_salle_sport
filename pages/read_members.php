<table class="min-w-full divide-y divide-gray-200">
    <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telephone</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
    </tr>
<?php

    include '../config/db.php';

    $requete = "SELECT id_membre,nom,prenom,email,telephone
                FROM membres M
                ORDER BY id_membre;";
    $query = mysqli_query($conn,$requete);

    while($rows=mysqli_fetch_assoc($query)){
        echo "<tr class='bg-white divide-y divide-gray-200'>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['nom']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['prenom']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['email']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>".$rows['telephone']."</td>";
            echo "<td class='px-6 py-4 whitespace-nowrap'>
                <button class='px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out'>Edit</button>
                <a href='delete_member.php?id=".$rows['id_membre']."'><button class='ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out'>Delete</button></a>
                </td>";
        echo "</tr>";
    }

?>
</table>