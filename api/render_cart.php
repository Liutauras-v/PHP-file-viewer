<?php
session_start();

function getID($arr, $id)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]['id'] == $id)
            return $arr[$i]['author'];
    }
}


$html = '';
$by = json_decode(file_get_contents('https://picsum.photos/v2/list/'), true);

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $html = '<p class="empty_cart_msg">Cart is empty...</p>';
} else {
    foreach ($_SESSION['cart'] as $key => $value) {

        $html .= '<div class="img" style=\'background-image:url("https://picsum.photos/id/' . $key . '/400/400")\'>
        <div id="' . $key . '" class="img_hover">
        <span class="by">By: ' . getID($by, $key) . '</span>
        <span class="count">x' . $value . '</span>
        <span onclick="removeItem(' . $key . ')" class="close">&#10005;</span>
        </div></div>';
    }
}

echo $html;
