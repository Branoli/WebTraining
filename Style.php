<?php
class Style
{
    public static $Style = array
    (
        1=>'<link rel="stylesheet" href="/css/start.css">',
        2=>'<link rel="stylesheet" href="/css/about.css">',
        3=>'<link rel="stylesheet" href="/css/topList.css">'
    );
    public static function Get_Style($style)
    {
        return self::$Style[$style];
    }
}
