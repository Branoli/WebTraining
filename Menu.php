<?php
class Menu
{
    public static $Menu = array
    (
        1 => '<html><ul class="styleHeader" class="blockUL">
                <li class="LOGO"><a href="assets/start.html?page=1">gameName</a></li>
                <li class="aEdit"><a href="">StartGame</a></li>
                <li class="aEdit"><a href="assets/about.html?page=2">About</a></li>
                <li class="aEdit"><a href="assets/topList.html?page=3">TopList</a></li>
                </ul></html>',
        2 => '<html><ul class="styleHeader" class="blockUL">
                <li class="LOGO"><a href="assets/start.html?page=1">gameName</a></li>
                <li class="aEdit"><a href="assets/start.html?page=2">StartGame</a></li>
                <li class="aEdit"><a href="">About</a></li>
                <li class="aEdit"><a href="assets/about.html?page=3">TopList</a></li>
                </ul></html>',
        3 => '<html><ul class="styleHeader" class="blockUL">
                <li class="LOGO"><a href="assets/start.html?page=1">gameName</a></li>
                <li class="aEdit"><a href="assets/start.html?page=2">StartGame</a></li>
                <li class="aEdit"><a href="assets/topList.html?page=3">About</a></li>
                <li class="aEdit"><a href="">TopList</a></li>
                </ul></html>'
    );
    public static function Get_Menu($menu)
    {
        return self::$Menu[$menu];
    }
}

