<?php
if ($_SESSION["windowsize"] >= 840) {
    $befor = '
    <div class="infos">
    <div class="info_title">
        第二回鉄道模型で遊ぼう <br>
        2025年3月29,30日開催！！
    </div>
    <div class="announcement">
        イベントサイト近日公開予定
    </div>
    </div>
    <div class="befor_info">
        <img src="poster.png" alt="" class="poster">
    </div>

    ';

    $css .= '
    .infos{
            width:780px;
            margin: 0 auto;
        }
    .info_title {
            position: relative;
            font-size: 60px;
            //left: 400px;
        }

        .announcement {
            position: relative;
            font-size: 42px;
            //left: 500px;
        }

        .poster {
            width: 700px;
        }

        .befor_info {
            width: 700px;
            margin: 0 auto;
        }
        ';
} else {
    $befor = '
    <div class="info_title">
        第二回鉄道模型で遊ぼう <br>
        2025年3月29,30日開催！！
    </div>
    <div class="announcement">
        イベントサイト近日公開予定
    </div>
    <div class="befor_info">
        <img src="poster.png" alt="" class="poster">
    </div>

    ';

    $css .= '
    .info_title {
            position: relative;
            font-size: ' . ($_SESSION["windowsize"] / 14) . 'px;
            //left: 400px;
        }

        .announcement {
            position: relative;
            font-size: ' . ($_SESSION["windowsize"] / 20) . 'px;
            //left:500px;
        }

        .poster {
            width: 100%;
        }

        .befor_info {
            width: 100%;
            margin: 0 auto;
        }
        ';
}
