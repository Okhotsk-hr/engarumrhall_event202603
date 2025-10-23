<?php
//車両紹介ページ公開
$announce01 = '
<div class="announce01">車両紹介ページを公開しました。<br>車両は順次追加していきます。<br>(2025/2/20)</div>
<div>　</dvi>
';


if ($_SESSION["windowsize"] >= 800) {
    $css .= '
    .announce01{
        width: 430px;
        font-size: 25px;
        margin: 0 auto;
    }
    
        ';
} else {
    $css .= '
    .announce01{
        width: ' . ($_SESSION["windowsize"] - 50) . 'px;
        font-size: ' . ($_SESSION["windowsize"] / 20) . 'px;
        margin: 0 auto;
    }
    
        ';
}
