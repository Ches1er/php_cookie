<?php

include FUNC."view_fns.php";
include FUNC."goods_fns.php";

function action_contacts(){
    $data=[
        "title"=>"Contacts"
    ];
    echo getViewWTempate("template","contacts",$data);
}

function action_index(){
    $data=[
        "title"=>"Main"
    ];
    echo getViewWTempate("template","main",$data);
}


