<?php
class Menu
{
    public static $Menu = array
    (
        1 => '<html><ul class="styleHeader" class="blockUL">
                <li class="LOGO"><a href="index.php">gameName</a></li>
                <li class="aEdit"><a href="">StartGame</a></li>
                <li class="aEdit"><a href="about.php">About</a></li>
                <li class="aEdit"><a href="topList.php">TopList</a></li>
                </ul></html>',
        2 => '<html><ul class="styleHeader" class="blockUL">
                <li class="LOGO"><a href="index.php">gameName</a></li>
                <li class="aEdit"><a href="index.php">StartGame</a></li>
                <li class="aEdit"><a href="">About</a></li>
                <li class="aEdit"><a href="topList.php">TopList</a></li>
                </ul></html>',
        3 => '<html><ul class="styleHeader" class="blockUL">
                <li class="LOGO"><a href="index.php">gameName</a></li>
                <li class="aEdit"><a href="index.php">StartGame</a></li>
                <li class="aEdit"><a href="about.php">About</a></li>
                <li class="aEdit"><a href="">TopList</a></li>
                </ul></html>'
    );
    public static function Get_Menu($menu)
    {
        echo Menu::$Menu[$menu];
    }
}

/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.10.2017
 * Time: 20:10
 */