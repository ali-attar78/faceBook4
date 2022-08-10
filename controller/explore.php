<?php

include "model/dataBase.php";
$posts=$db->query("SELECT * FROM posts");

$userId=$_SESSION["userID"];
$user=$db->query("SELECT * FROM users WHERE id=$userId")->fetch_assoc();







if($_SESSION["login_admin_status"]==true){
    require "view/explore.php";
}else{
    require "view/index.php";
}

?>