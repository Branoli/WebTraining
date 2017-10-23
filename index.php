<?php
require 'Menu.php';
require 'Content.php';
require 'Style.php';
$page = 1;?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>gameName</title>
        <link rel="stylesheet" href="./css/generalStyles.css">
        <link rel="stylesheet" href="./css/start.css">
        <link rel="stylesheet" href="./css/about.css">
        <link rel="stylesheet" href="./css/topList.css">
    </head>
    <body>
    <div class="mainPage">
        <?php
        if (isset($_GET["page"])) $page = $_GET["page"];
        echo Menu::Get_Menu($page);
        echo Content::Get_Page($page);
        ?>
    </div>
    </body>
</html>
