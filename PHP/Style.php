<?php
class Style
{
    public static $Style = array
    (
        1=>'<link rel="stylesheet" href="assets/css/start.css">',
        2=>'<link rel="stylesheet" href="assets/css/about.css">',
        3=>'<link rel="stylesheet" href="assets/css/topList.css">'
    );
    public static function Get_Style($style)
    {
        echo Style::$Style[$style];
    }
}