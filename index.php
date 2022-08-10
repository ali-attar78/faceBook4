<?php

session_start();

$request=$_SERVER["REQUEST_URI"];
$request=str_replace("/facebook","",$request);

switch ($request){

    case("/"):
    case("/index"):
        require  "controller/index.php";
        break;

    case("/explore"):
            require "controller/explore.php";
        break;

    case("/personal_page"):
    case("/personal"):
        require "controller/personal_page.php";
        break;

    case("/register.php"):
    case("/register"):
        require "controller/register.php";
        break;

    case("/login_process.php"):
    case("/login_process"):
        require "controller/login_process.php";
        break;

    case("/logOut.php"):
    case("/logOut"):
        require "controller/logOut.php";
        break;

    case("/new_post.php"):
    case(" /new_post"):
        require "controller/new_post.php";
        break;

}






?>