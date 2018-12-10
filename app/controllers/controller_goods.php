<?php

include FUNC."view_fns.php";
include FUNC."goods_fns.php";

function getPageNumByURL($url){
    $url_to_str = parse_url($url,PHP_URL_QUERY);
    parse_str($url_to_str, $query_params);
    return $query_params['page'];
}

function action_show(){
    $currentPage = empty($_GET["page"])?1:$_GET["page"];
    $goods = getGoodsPerPage($currentPage);
    $pagesQty = getPagesQty();
    $data=[
        "title"=>"Goods",
        "pagesQty"=>$pagesQty,
        "goodsPerPage"=>$goods,
        "currentPage"=>$currentPage
    ];
    echo getViewWTempate("template","goods",$data);
}