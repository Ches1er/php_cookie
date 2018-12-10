<?php

include FUNC."goods_fns.php";

function fav_getFromCookie(){
    $favsId = @$_COOKIE["fav_item"];
    return(empty($favsId)?[]:json_decode($favsId));
}

function fav_addToCookie($id){
    $favs = fav_getFromCookie();
    $favs[]=$id;
    array_unique($favs);
    fav_saveCookie($favs);
}

function fav_saveCookie($favs){
    $favs = json_encode($favs);
    setcookie("fav_item",$favs,NULL,"/");
}

function fav_showCookie(){
    $favsId=fav_getFromCookie();
    $goods = getDataFromFile("goods");
    return array_filter($goods,function ($item) use ($favsId){
        return in_array($item["id"],$favsId);
    });
}

function fav_delFromCookie($id){
    $favs = fav_getFromCookie();
    $new_favs = [];
    foreach ($favs as $fav){
        if ($fav!=$id)$new_favs[]=$fav;
    }
    fav_saveCookie($new_favs);
}