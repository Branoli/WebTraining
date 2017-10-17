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
        1=>'assets/start.html',
        2=>'assets/about.html',
        3=>'assets/topList.html'
    );
    public static function Get_Page($page)
    {
        require Content::$pages[$page];
    }
}