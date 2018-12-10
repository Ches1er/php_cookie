<?
if (is_array($goodsPerPage)):
    foreach ($goodsPerPage as $value):
?>
<div><?=$value["name"]?>
    <a href="/fav/add?id=<?=$value["id"]?>">add</a>
</div>
<? endforeach;
endif;
?>
<h1>Goods</h1>
<div class="goods_unit"></div>
<ul class="pages">
    <? for($i=1;$i<=$pagesQty;$i++):?>
    <? if($i==$currentPage):?>
    <li><a href=<?="/goods?page=".$i." class=active"?>><?=$i?></a></li>
    <?else:?>
    <li><a href=<?="/goods?page=".$i." class=nonactive"?>><?=$i?></a></li>
    <? endif;
    endfor;?>
</ul>
