<?php function checkRoute(string $route) : void 
{
    echo "\$_POST dans le router.php<br>";
    var_dump($_POST);
    
    if ($route==="connexion")
    {
        require 'pages/login.php';
    }
    else if ($route==="creer-un-compte")
    {
        require 'pages/register.php';
    }
    else if ($route==="mon-compte")
    {
        require 'pages/account.php';
    }
    else 
    {
        require 'pages/homepage.php';
    }
}


?>