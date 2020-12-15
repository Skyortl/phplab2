<?php
include_once("menu.php");
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>";
echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>";
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">";
$menuItems = [
    'Home' => $_SERVER["DOCUMENTROOT"].'/phplab2/task.php',
    'About' => $_SERVER["DOCUMENTROOT"].'/phplab2/pages/about.php',
    'Contacts' =>$_SERVER["DOCUMENTROOT"].'/phplab2/pages/contacts.php',
    'Map' => $_SERVER["DOCUMENTROOT"].'/phplab2/pages/map.php',
    'Project' => $_SERVER["DOCUMENTROOT"].'/phplab2/pages/project.php',
];
echo generateMenu($menuItems);