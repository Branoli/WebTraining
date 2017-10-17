<?php
include 'Menu.php';
include 'Content.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>gameName</title>
        <link rel="stylesheet" href="assets/css/generalStyles.css">
        <link rel="stylesheet" href="assets/css/about.css">
        <link rel="stylesheet" href="assets/css/start.css">
        <link rel="stylesheet" href="assets/css/topList.css">
    </head>
    <body>
    <div class="mainPage">
        <?php
        $page = $_GET['page'];
        if (!empty($page))
        {
            echo $page;
            Menu::Get_Menu($page);
            Content::Get_Page($page);
        }
        else
        {
            Menu::Get_Menu(1);
            Content::Get_Page(1);
        }
        ?>
    </div>
    </body>
</html>
