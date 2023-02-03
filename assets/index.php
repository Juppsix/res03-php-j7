<?php 
require './router.php';
if (isset($_GET["route"]))
{
    checkRoute(string ($_GET["route"]));
}
else 
{
    checkRoute(string ($_GET[""]));
}

?>