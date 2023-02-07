<?php
require './logic/database.php';
require './models/User.php';

echo "\$_POST dans register.php<br>";
var_dump($_POST);

// utiliser ce qu'il y a dans $_post
// pour appeler save user


// vérifier si $_post formName existe et si sa valeur c'est "register"
    
     if (isset($_POST["formName"]))
     {
         if($_POST["formName"] ==="register")
         {
             // on veut appeler save user
             // il prend quoi en paramètres? un user mais nous on en a pas
             // je vais créer un user avec les valeurs qui sont dans $_POST
             $firstName = $_POST["firstName"];
             $lastName = $_POST["lastName"];
             $email = $_POST["email"];
             $password = $_POST["password"];
             $user = new User($firstName, $lastName, $email, $password);
             $user = saveUser($user);
         }
     }
$template = "register";

require './templates/layout.phtml';
?>