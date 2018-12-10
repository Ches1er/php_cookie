<?php

define("DATAFILE","goods");
define("NUMBEROFGOODS",4);

function getDataFromFile($file){
    $goods_json = file_get_contents(DATAFILES.$file.".json");
    return $goods_array = json_decode($goods_json,true);
}

function getPagesQty(){
    $goods_arr = getDataFromFile(DATAFILE);
    $pages = ceil((count($goods_arr)/NUMBEROFGOODS));
    return $pages;
}

function getGoodsPerPage($currentPage){
    $goods_arr = getDataFromFile(DATAFILE);
    $goods_arr_page = array_chunk($goods_arr,NUMBEROFGOODS)[$currentPage-1];
    return $goods_arr_page;
}
