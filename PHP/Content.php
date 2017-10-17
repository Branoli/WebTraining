<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.10.2017
 * Time: 20:13
 */

class Content
{
    public static $pages=array(
        1=>'assets/start.php',
        2=>'assets/about.php',
        3=>'assets/topList.php'
    );
    public static function Get_Page($num_page)
    {
        return Content::$pages[$num_page];
    }
}