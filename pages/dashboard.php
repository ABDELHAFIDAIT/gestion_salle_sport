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
            <div class="hidden">
                <div id="manage-activity" class="flex items-center justify-around py-10">
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
            </div>

            <!-- Manage Bookings -->
            <div class="hidden">
                <div id="manage-booking" class="flex items-center justify-around py-10">
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
            </div>

            <!-- Manage Payment -->
            <div class="hidden">
                <div id="manage-payment" class="flex items-center justify-around py-10">
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
            </div>
        </section>
    </main>
</body>
</html>