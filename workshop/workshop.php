<?php
if ($_SESSION["windowsize"] >= 800) {
    $workshop = '
    <p class="title">
        ジオラマワークショップ開催！
    </p>

    <div class="main">
        夏のジオラマの祭典「鉄道模型コンテスト」を鉄道模型メーカーKATOは特別協賛しています。
        そんなKATOのジオラマ製品を使用した「ミニジオラマワークショップ」を遠軽の地で行います！
    </div>


    <div class="poster">
        <img src="announce.png" alt="" width=100%>
    </div>

    <!--<iframe src="announce.pdf" width="100%" height="300"></iframe>--> 
    <p class="entry">
        予約は以下もしくは
        <a href="https://airrsv.net/kato-minidiorama-workshop/calendar">こちら</a>
        から<br>
        すべてのメニューから<遠軽>を選んでください
    </p>
    <iframe src="https://airrsv.net/kato-minidiorama-workshop/calendar" width="100%" height="600"></iframe> 

    ';

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

        .poster {
            width: 600px;
            margin: auto;
        }

        .main {
            width:570px;
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
    $workshop = '
    <p class="title">
    ～終了しました～
        ジオラマワークショップ開催！
    </p>

    <div class="main">
        夏のジオラマの祭典「鉄道模型コンテスト」を鉄道模型メーカーKATOは特別協賛しています。
        そんなKATOのジオラマ製品を使用した「ミニジオラマワークショップ」を遠軽の地で行います！
    </div>


    <div class="poster">
        <img src="announce.png" alt="" width=100%>
    </div>

    <!--<iframe src="announce.pdf" width="100%" height="300"></iframe>--> 
    <p class="entry">
        予約は以下もしくは
        <a href="https://airrsv.net/kato-minidiorama-workshop/calendar">こちら</a>
        から<br>
        すべてのメニューから<遠軽>を選んでください
    </p>
    <iframe src="https://airrsv.net/kato-minidiorama-workshop/calendar" width="95%" height="600"></iframe> 

    ';

    $css .= '

        .title{
            position: relative;
            font-size: ' . ($_SESSION["windowsize"] / 15) . 'px;
            text-align: center;
                
        }

        .poster {
            width: 95%;
            margin: auto;
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
