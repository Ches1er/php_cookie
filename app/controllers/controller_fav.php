<?php

include FUNC."view_fns.php";
include FUNC."fav_fns.php";

function action_show(){
   $data=[
       "title"=>"favourites",
       "favs"=>fav_showCookie()
   ];
   echo getViewWTempate("template","fav",$data);
}

function action_add(){
    $id = $_GET["id"];
    fav_addToCookie($id);
    header("Location:/fav");
    return "";
}

function action_del(){
    $id = $_GET["id"];
    fav_delFromCookie($id);
    header("Location:/fav");
    return "";
}