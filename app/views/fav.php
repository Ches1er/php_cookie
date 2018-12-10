<h1>favs</h1>

<?
if (is_array($favs)):
    foreach ($favs as $value):
        ?>
        <div><?=$value["name"]?>
            <a href="/fav/del?id=<?=$value["id"]?>">x</a>
        </div>
    <? endforeach;
endif;
?>