<?php
    session_start();
    if(isset($_POST['submit'])){
        $email=$_POST['mail'];
        $mdp=sha1($_POST['mdp']);
        include('db.php');
        $sql='SELECT * FROM users WHERE mail = ?';
        $request = $db -> prepare($sql);
        $request -> execute([$email]);
        $result = $request -> fetch();
        if($mdp===$result['password']){
            $_SESSION['email_user']=$result['mail'];
            $_SESSION['id_user']=$result['id'];
            header('location:./test.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input name="mail" placeholder="email" type="email"></input>
    <input name="mdp" placeholder="MotDePasse" type="password"></input>
    <button type="submit" name="submit">login</button>
    </form>
</body>
</html>