<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OXYFIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>
        .main{
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('./assets/img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


</head>
<body>
    <?php 
        require '../includes/header.php';
    ?>

    <main class="main h-screen flex text-white items-center justify-center">
        <section class="flex flex-col gap-2 bg-black w-[35vw] p-8 rounded-md shadow-sm shadow-orange-500">
            <h1 class="font-semibold text-2xl text-center">WELCOME BACK TO <span class="text-orange-500">OXYFIT</span></h1>
            <h2 class="font-semibold text-xl text-center mb-5">LOGIN FORM</h2>
            <form action="" class="flex flex-col gap-3">
                <label for="email">Email Adress</label>
                <input type="email" name="email" id="email" class="py-1 px-3 text-black placeholder:text-gray-600 outline-none" placeholder="Ex: peter@example.com">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="py-1 px-3 text-black placeholder:text-gray-600 outline-none" placeholder="Enter Your Password ">
                <a href="#" class="text-end text-sm underline text-purple-200">Forget Password?</a>
                <button class="py-1 px-4 bg-orange-500 text-black font-medium mt-5">LOGIN</button>
            </form>
        </section>
    </main>

    <?php 
        require '../includes/footer.php';
    ?>
</body>
</html>