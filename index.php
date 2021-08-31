<?php
require_once "function.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <table id="table">
        <?
        $items = Products(2);
         if(!empty($items)):
        foreach($items as $key => $item): ?>
            <? if ($item['IS_HIDE'] == 'hide') {continue;} ?>
                <tr>
                    <td><?= $item['ID']; ?></td>
                    <td><?= $item['PRODUCT_ID']; ?></td>
                    <td><?= $item['PRODUCT_NAME']; ?></td>
                    <td><?= $item['PRODUCT_PRICE']; ?></td>
                    <td><?= substr($item['PRODUCT_ARTICLE'], 0, 30).'...' ; ?></td>
                    <td><div class="counter">
                            <div class="counter_minus">-</div>
                            <span><input class="counter_input" type="text" value="<?= $item['PRODUCT_QUANTITY']; ?>"></span>
                            <div class="counter_plus"><span>+</span></div>
                        </div></td>
                    <td><?= $item['DATE_CREATE']; ?></td>
                    <td class="hide"><input class="hide_btn" value="Скрыть" name="hide" type="submit"></td>
                </tr>
        <? endforeach; ?>
        <? endif; ?>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
