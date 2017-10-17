<?php
include '../Menu.php';
include '../Content.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>gameName</title>
        <link rel="stylesheet" href="css/generalStyles.css">
        <link rel="stylesheet" href="css/start.css">
    </head>
    <body>
        <div class="mainPage">
            <?php
            $page = $_GET['page'];
            if (!empty($page))
            {
                Content::Get_Page($page);
            }
            else
            {
                Menu::Get_Menu(1);
            }
            ?>
            <div class="underHeader">
              <button class='butStart'>StartGame</button>
            </div>
        </div>
    </body>
</html>
