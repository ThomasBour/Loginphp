<!-- <?php
    session_start();
    echo $_SESSION['email_user'];
    echo '<br>';
    echo $_SESSION['id_user'];
    echo '<br>';
    echo $_SESSION['name_user'];
?> -->
<!DOCTYPE html>
<html lang="en" class="bg-blue-600 bg-opacity-30">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-gray-700 md:flex md:items-center md:justify-between p-4 shadow-lg md:pb-4 ">
        <div class="flex items-center justify-between mb-4 md:mb-0">
          <h1 class="leading-none text-2xl text-grey-darkest">
            <a class="text-white text-3xl font-bold p-3 text-red-200 hover:text-green-200" href="#">
              Acceuil
            </a>
          </h1>
        </div>
        <nav>
          <ul class="list-reset md:flex md:items-center">
            <li class="md:ml-4">
              <a class="border-t block text-xl hover:underline py-2 text-red-200 hover:text-green-200 md:border-none md:p-0" href="./paint.php">
                Paint
              </a>
            </li>
            <li class="md:ml-4">
              <a class="border-t block p-3 text-xl hover:underline py-2 text-red-200 hover:text-green-200 md:border-none md:p-0" href="./logout.php">
                Logout
              </a>
            </li>
          </ul>
        </nav>
    </header>

</body>
</html>