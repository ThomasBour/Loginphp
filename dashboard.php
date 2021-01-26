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
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-600 bg-opacity-30">
    <header class="bg-gray-700 md:flex md:items-center md:justify-between p-4 shadow-lg md:pb-4 ">
        <div class="flex items-center justify-between mb-4 md:mb-0">
          <h1 class="leading-none text-2xl text-grey-darkest">
            <a class="text-white text-3xl font-bold p-3 text-red-200 hover:text-green-200 transition ease-in duration-1000 yup" href="#">
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
    <div class="container my-12 mx-auto px-4 md:px-12">
  <div class="flex flex-wrap -mx-1 lg:-mx-4 flex content-center justify-center">
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">
          <article class="overflow-hidden rounded-lg shadow-lg">             
                  <img alt="Placeholder" class="block h-auto w-full" src="https://www.hainaut-developpement.be/wp-content/uploads/2019/06/portrait-becode-photo-1.jpg">            
              <header class="flex items-center justify-between leading-tight p-2 md:p-4 bg-gray-300">
                  <h1 class="text-lg">
                      <p class="no-underline hover:underline hover:text-red-600 text-black">
                          <?php echo $_SESSION['name_user'];?>
                      </p>
                  </h1>
                  <p class="text-grey-darker text-sm ">
                  <?php setlocale(LC_TIME, 'fra_fra');
                  echo strftime('%d-%m-%Y %H:%M');  // 26-01-2021 14:42?>
                  </p>
              </header>
              <footer class="flex items-center justify-between leading-none p-2 md:p-4 bg-gray-300">
                  <div class="flex items-center no-underline hover:underline text-black" href="#">
                      <img alt="Placeholder" class="transition ease-in duration-700 w-20 h-20 rounded-full border-4 border-white mr-6 -mt-8" src="https://avatars.githubusercontent.com/u/26065817?s=400&u=90415066e6f605a9273bd0689e24c68262b630c6&v=4"> <!-- j'ai voulu mettre une balise php et d utiliser $_SESSION['image'] pour changer l'image en fonction de l'utilisateur mais le lien n'est pas trouvé et je n ai pas trouvé la raison étant donné que ca a fonctionné sur un autre projet. -->
                      <p class="ml-2 text-lg">
                        <?php echo $_SESSION['email_user'];?>
                      </p>
                  </div>
                  <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                      <span class="hidden">Like</span>
                      <i class="fa fa-heart"></i>
                  </a>
              </footer>
          </article>
      </div>
</body>
</html>