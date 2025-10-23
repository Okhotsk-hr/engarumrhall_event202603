<?php
echo $_SESSION["windowsize"];
$workshop = '
    <div class="img">
        <img src="map.png" alt="" width=100%>
    </div>


    <div>　<br>　</div>
    <div class="main">
       ＜KATOジオラマワークショップ＞<br>
       当日申し込みはイベント受付まで<br>
       <a href="../workshop">詳細はこちら</a>
    </div>

    <div class="img">
        <img src="img/workshop1.jpg" alt="" width=100%>
    </div>
    <div class="img">
        <img src="img/workshop2.jpg" alt="" width=100%>
    </div>

    <div>　<br>　</div>
    <div class="main">
        1.メインレイアウト
    </div>

    <div class="img">
        <img src="img/main.jpg" alt="" width=100%>
    </div>

    <div>　<br>　</div>
    <div class="main">
        2.サウンドシステム<br>
        対象列車：SL冬の湿原号、サフィール踊り子
    </div>

    <div class="img">
        <img src="img/sound.jpg" alt="" width=100%>
    </div>

    <div>　<br>　</div>
    <div class="main">
        3.IchigoJam自動運転<br>
        <a href="ichigorailclub.php">Ichigo鉄道</a>
        制作の転車台自動制御を使った、機関車の連結・切り離しを含む自動運転
    </div>
    <div class="img">
        <img src="img/turntable.jpg" alt="" width=100%>
    </div>

    <div>　<br>　</div>
    <div class="main">
        4.Nゲージ小ループ
    </div>
    
    <div>　<br>　</div>
    <div class="main">
        5.HOゲージ
    </div>
    
    <div>　<br>　</div>
    <div class="main">
        6.丸瀬布いこいの森<br>　雨宮21号ポスター
    </div>
    <div class="img">
        <img src="img/maruseppu.jpg" alt="" width=100%>
    </div>

    <div>　<br>　</div>
    <div class="main">
        7.青春18きっぷ/SL常紋号パネル<br>
        8.各種鉄道グッズ展示
    </div>
    <div class="img">
        <img src="img/panel.jpg" alt="" width=100%>
    </div>

    <div>　<br>　</div>
    <div class="main">
        9.鉄道写真
    </div>
    <div class="img">
        <img src="img/pictures.jpg" alt="" width=100%>
    </div>


    ';
if ($_SESSION["windowsize"] >= 800) {


    $css .= '

        .title{
            position: relative;
            font-size: 60px;
            text-align: center;
                
        }

        .announcement {
            position: relative;
            font-size: 42px;
            //left: 500px;
        }

        .img {
            width: 800px;
            margin: auto;
            border-radius: 10px;
        }

        img{
            border-radius: 20px;
        }

        .main {
            width:800px;
            font-size: 30px;
            line-height: 40px;
            margin: auto;
        }

        .entry{
            position: relative;
            font-size: 25px;
            text-align: center;
        }

        ';
} else {

    $css .= '

        .title{
            position: relative;
            font-size: ' . ($_SESSION["windowsize"] / 15) . 'px;
            text-align: center;
                
        }

        .img {
            width: 95%;
            margin: auto;
        }

        img{
            border-radius: 20px;
        }

        .main {
            width:100%;
            font-size: ' . ($_SESSION["windowsize"] / 20) . 'px;
            line-height: 25px;
            margin: auto;
        }

        .entry{
            position: relative;
            font-size: ' . ($_SESSION["windowsize"] / 19) . 'px;
            text-align: center;
        }

        ';
}
