<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <style>
    .yep{
    font-family: 'The Girl Next Door', cursive;
    }
    .yup{
    font-family: 'The Girl Next Door', cursive;
    }
    </style>
</head>
<body class="bg-blue-600 bg-opacity-30">
    <header class="bg-gray-700 md:flex md:items-center md:justify-between p-4 shadow-lg md:pb-4 ">
        <div class="flex items-center justify-between mb-4 md:mb-0">
          <h1 class="leading-none text-2xl text-grey-darkest">
            <a class="text-white text-3xl font-bold p-3 text-red-200 hover:text-green-200 transition ease-in duration-1000 yup" href="./dashboard.php">
              Acceuil
            </a>
          </h1>
        </div>
        <nav>
          <ul class="list-reset md:flex md:items-center">
            <li class="md:ml-4">
              <a class="transition ease-in duration-700 border-t block text-xl hover:underline py-2 text-red-200 hover:text-green-200 md:border-none md:p-0 yup" href="./paint.php">
                Paint
              </a>
            </li>
            <li class="md:ml-4">
              <a class="transition ease-in duration-700 border-t block p-3 text-xl hover:underline py-2 text-red-200 hover:text-green-200 md:border-none md:p-0 yep" href="./logout.php">
                Logout
              </a>
            </li>
          </ul>
        </nav>
    </header>
<div class=" flex flex-col items-center justify-center pb-48">
    <div class="flex space-x-8 text-3xl">
        <button class="animate-spin inline-block yep py-4 px-8 bg-red-500 text-yellow-100 rounded-lg">Spin</button>
        <button class="animate-ping inline-block yup py-4 px-8 bg-red-500 text-blue-100 rounded-lg">Ping</button>
        <button class="animate-pulse inline-block yup py-4 px-8 bg-red-500 text-red-100 rounded-lg">Pulse</button>
        <button class="animate-bounce inline-block yep py-4 px-8 bg-red-500 text-teal-100 rounded-lg">Bounce</button>
    </div>
</div>
<div class="container mt-16 mx-auto">
  <div class="flex justify-around text-center space-x-16">
    <div class="transform h-64 bg-blue-400 w-1/5 hover:bg-red-500 transition duration-500 hover:scale-125 yep">
    test
    </div>
    <div class="transform h-64 bg-blue-400 w-1/5 hover:bg-purple-500 transition duration-500 hover:scale-125 yep">
    test
    </div>
    <div class="transform h-64 bg-blue-400 w-1/5 hover:bg-green-600 transition duration-500 hover:scale-125 yup">
    test
    </div>
  </div>
</div>
</div>
</body>