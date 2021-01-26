<?php
    session_start();  //lancer le serveur
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if(isset($_POST['submit'])){ //si on clique sur le bouton(voir plus bas)
        $email=$_POST['mail']; 
        $mdp=sha1($_POST['mdp']); //crypter les caracteres 
        include('db.php');  //pour copier le code d une page
        $sql='SELECT * FROM users WHERE mail = ?';  //code que ca doit prendre dans la base (* = tout select)
        $request = $db -> prepare($sql);  
        $request -> execute([$email]); 
        $result = $request -> fetch(); //récup les données plus haut 
        if($mdp===$result['password']){  
            $_SESSION['email_user']=$result['mail'];
            $_SESSION['id_user']=$result['id'];
            $_SESSION['name_user']=$result['Admin'];
            $_SESSION['image']=$result['profilp'];
            header('location:./dashboard.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
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
<body class="bg-purple-200 flex content-center justify-center h-full items-center">
<div class="bg-white shadow-lg max-w-lg md:flex">
    <img src="https://i.imgur.com/obMQiHs.jpg" class="flex-1 w-full h-60 object-cover md:h-full"> <!-- Exemple : h-40 = 10rem car tout est divisé en 1/4 de rem -->
<div class="p-4 flex-1 md:flex md:flex-col justify-center items-center">
    <form method="POST">
    <h1 class="text-2xl font-bold text-gray-800 mb-5 yep">Connexion</h1>
    <!-- <h1 class="text-2xl font-bold text-blue-800 mb-2">Oui testOui</h1> -->
    <div class="mb-4">
            <label for="mail" class="block text-blue-300 mb-2 yup">Insert your email</label>
            <input name="mail" placeholder="email" type="email" class="border py-2 px-3 text-gray-700 w-full focus:shadow-inner"></input>
    </div>
    <div class="mb-4">
            <label for="mdp" class="block text-blue-300 mb-2 yup">Insert your password</label>
            <input name="mdp" placeholder="Password" type="password" class="border py-2 px-3 text-gray-700 w-full focus:shadow-inner"></input>
    </div>
        <div>
            <button type="submit" name="submit" class="bg-blue-500 text-white px-6 py-1 rounded transform scale-100 hover:scale-105 hover:bg-blue-600 ">login</button>
        </div>
    </div>
    </form>
</div>
</body>
</html>