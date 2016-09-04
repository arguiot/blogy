<?php
//Your Site URL
$url = "http://www.exemple.com/";

//default main folder
$folder = "_site";

//database configuration
//see PHP documentation for help
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//Database table configuration

$table = "blog";

$table_post_content = "post_content";

//row config

$table_post_title = "post_title";

$table_post_date = "post_date";

$table_post_id = "id";

