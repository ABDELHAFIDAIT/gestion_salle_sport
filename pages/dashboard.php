<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OXYFIT - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>
<body>
    <main class="grid grid-cols-5">
        <?php 
            require '../includes/aside.php';
        ?>

        <section class="col-span-4">
            <div class="flex justify-between items-center py-3 px-5 bg-gray-100 border border-b-gray-300 ">
                <h1 class="font-bold text-3xl">DASHBOARD</h1>
                <div class="flex items-center gap-2">
                    <h1 class="text-sm font-normal underline">Admin</h1>
                    <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z" fill="#000000"></path></g></svg>
                </div>
            </div>

            <!-- Manage Activities -->
            <div class="hidden" id="manage-activity" >
                <div class="flex items-center justify-around py-10">
                    <button id="btn-add-activity" type="button" class="font-bold py-2 px-6 bg-orange-500 rounded-md transition-all duration-200 hover:px-7">ADD NEW ACTIVITY</button>
                    <div class="relative">
                        <input
                            class="appearance-none border-2 pl-10 border-gray-300 hover:border-gray-400 transition-colors rounded-md w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-purple-600 focus:border-purple-600 focus:shadow-outline"
                            id="username"
                            type="text"
                            placeholder="Search..."
                        />
                        <div class="absolute right-0 inset-y-0 flex items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                            </svg>
                        </div>

                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 ml-3 text-gray-400 hover:text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="mx-5 text-[10px] h-[60vh] overflow-auto">
                    <?php
                            require "read_activities.php";
                    ?>
                </div>
            </div>
            
            <!-- Manage Bookings -->
            <div class="hidden" id="manage-booking">
                <div class="flex items-center justify-around py-10">
                    <button id="add-new-booking" type="button" class="font-bold py-2 px-6 bg-orange-500 rounded-md transition-all duration-200 hover:px-7">ADD NEW BOOKING</button>
                    <div class="relative">
                        <input
                            class="appearance-none border-2 pl-10 border-gray-300 hover:border-gray-400 transition-colors rounded-md w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-purple-600 focus:border-purple-600 focus:shadow-outline"
                            id="username"
                            type="text"
                            placeholder="Search..."
                        />
                        <div class="absolute right-0 inset-y-0 flex items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                            </svg>
                        </div>

                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 ml-3 text-gray-400 hover:text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="mx-5 text-[10px] overflow-x-auto">
                    <?php
                            require "read_booking.php";
                    ?>
                </div>
            </div>

            <!-- Manage Members -->
            <div class="hidden" id="manage-members">
                <div class="flex items-center justify-around py-10">
                    <button id="btn-add-member" type="button" class="font-bold py-2 px-6 bg-orange-500 rounded-md transition-all duration-200 hover:px-7">ADD NEW MEMBER</button>
                    <div class="relative">
                        <input
                            class="appearance-none border-2 pl-10 border-gray-300 hover:border-gray-400 transition-colors rounded-md w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-purple-600 focus:border-purple-600 focus:shadow-outline"
                            id="username"
                            type="text"
                            placeholder="Search..."
                        />
                        <div class="absolute right-0 inset-y-0 flex items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                            </svg>
                        </div>

                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 ml-3 text-gray-400 hover:text-gray-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="mx-5 text-[10px] h-[60vh] overflow-y-auto">
                    <?php
                            require "read_members.php";
                    ?>
                </div>
            </div>

            <!-- Statistics -->
            <div class="p-10 flex gap-10 text-white text-2xl font-semibold" id="statistics">
                <div class="flex flex-col items-center gap-10 p-10 bg-[#000000] flex-1 rounded-md shadow-md shadow-gray-500">
                    <h1>Total Members</h1>
                    <h2 class="text-orange-500">
                        <?php 
                            require '../config/db.php';

                            $requet = "SELECT COUNT(id_membre) AS count_membre FROM membres";
                            $query = mysqli_query($conn,$requet);
                            $rows=mysqli_fetch_assoc($query);
                            $count = $rows['count_membre'];
                            echo "$count";
                        ?>
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-10 p-10 bg-[#000000] flex-1 rounded-md shadow-md shadow-gray-500">
                    <h1>Total Activities</h1>
                    <h2 class="text-orange-500">
                        <?php 
                            require '../config/db.php';

                            $requet = "SELECT COUNT(id_activite) AS count_activite FROM activites";
                            $query = mysqli_query($conn,$requet);
                            $rows=mysqli_fetch_assoc($query);
                            $count = $rows['count_activite'];
                            echo "$count";
                        ?>
                    </h2>
                </div>
                <div class="flex flex-col items-center gap-10 p-10 bg-[#000000] flex-1 rounded-md shadow-md shadow-gray-500">
                    <h1>Total Bookings</h1>
                    <h2 class="text-orange-500">
                        <?php 
                            require '../config/db.php';

                            $requet = "SELECT COUNT(id_reservation) AS count_reservation FROM reservations";
                            $query = mysqli_query($conn,$requet);
                            $rows=mysqli_fetch_assoc($query);
                            $count = $rows['count_reservation'];
                            echo "$count";
                        ?>
                    </h2>
                </div>
            </div>

            <!-- Add New Booking Form -->
            <div id="add-form" class="flex hidden justify-center items-center fixed inset-0 bg-black bg-opacity-80">
                <form method="POST" action="create_booking.php" class="flex flex-col bg-black text-white py-3 px-10 rounded-md w-[50%] gap-3">
                    <div id="infos-member" class="flex flex-col gap-3">
                        <label class="font-medium" for="last-name">Member Last Name</label>
                        <input id="last-name" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="last-name" placeholder="Enter the Member's Last Name" required>

                        <label class="font-medium" for="first-name">Member First Name</label>
                        <input id="first-name" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="first-name" placeholder="Enter the Member's First Name" required>

                        <label class="font-medium" for="email">Member Email</label>
                        <input id="email" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="email" placeholder="Enter the Member's Email" required>

                        <label class="font-medium" for="phone">Member Phone Number</label>
                        <input id="phone" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="phone" placeholder="Enter the Member's Phone Number" required>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="select-activity">Choose Activity</label>
                        <select id="select-activity" class="text-black py-1 px-4 font-medium outline-none" name="select-activity">
                            <?php 
                                require '../config/db.php';
                                
                                $requete = "SELECT nom_activite FROM activites";
                                $query = mysqli_query($conn,$requete);

                                while( $fetch =mysqli_fetch_assoc($query)){
                                    echo '<option value="'.$fetch['nom_activite'].'">'.$fetch['nom_activite'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="flex justify-end gap-5 mt-3">
                        <button id="confirm-add" class="font-medium py-1 px-5 bg-orange-500 text-black transition-all duration-300 rounded-sm hover:scale-105" type="submit">Save</button>
                        <button id="cancel-add" class="font-medium py-1 px-5 border border-white rounded-sm transition-all duration-300 hover:text-black hover:bg-gray-500 hover:border-none" type="button">Annuler</button>
                    </div>
                </form>
            </div>


            <!-- Add New Activity Form -->
            <div id="add-activity-form" class="flex hidden justify-center items-center fixed inset-0 bg-black bg-opacity-80">
                <form method="POST" action="create_activity.php" class="flex flex-col bg-black text-white py-3 px-10 rounded-md w-[50%] gap-3">
                    <div id="infos-member" class="flex flex-col gap-3">
                        <label class="font-medium" for="activity-name">Activity Name</label>
                        <input id="activity-namee" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="activity-name" placeholder="Enter the Activity Name" required>

                        <label class="font-medium" for="description">Activity Description</label>
                        <textarea id="description" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="description" placeholder="Enter the Description Here ..." required></textarea>

                        <label class="font-medium" for="capacite">Activity Capacite</label>
                        <input id="capacite" min="0" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="number" name="capacite" required>

                        <label class="font-medium" for="start-date">Start Date</label>
                        <input id="start-date" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="date" name="start-date" required>

                        <label class="font-medium" for="end-date">End Date</label>
                        <input id="end-date" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="date" name="end-date" required>
                    </div>

                    <div class="flex justify-end gap-5 mt-3">
                        <button id="confirm-add-activity" class="font-medium py-1 px-5 bg-orange-500 text-black transition-all duration-300 rounded-sm hover:scale-105" type="submit">Save</button>
                        <button id="cancel-add-activity" class="font-medium py-1 px-5 border border-white rounded-sm transition-all duration-300 hover:text-black hover:bg-gray-500 hover:border-none" type="button">Annuler</button>
                    </div>
                </form>
            </div>

        </section>
    </main>


    <script src="../public/assets/js/script.js"></script>
</body>
</html>