<?php
$header = '
 <!-- ヘッダーロゴ -->
        <div class="logo">鉄道模型で遊ぼう</div>

        <!-- ハンバーガーメニュー部分 -->
        <div class="nav">

            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
            <input id="drawer_input" class="drawer_hidden" type="checkbox">

            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open"><span></span></label>

            <!-- メニュー -->
            <nav class="nav_content">
                <ul class="nav_list">
                    <div class="logo">鉄道模型で遊ぼう</div>
                    <li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/index.php ">TOP</a></li><li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/n_ho/ ">Nゲージとは</a></li><li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/v_menu.php ">車両紹介</a></li><li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/report/ ">2024年レポート</a></li><li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/syuminokai/ "><主催>遠軽鉄道趣味の会</a></li><li class="nav_item"><a href="https://twitter.com/engarumrhall "><協力>遠軽鉄道模型館(X)</a></li><li class="nav_item"><a href="https://www.railpark.net/ "><協力>Rail Park Sapporo</a></li>                </ul>
            </nav>

        </div>
        ';

$header = '
        <div class="header1">
        <div class="logo">鉄道模型で遊ぼう</div>
<!-- <div>
<div class="logo">鉄道模型で遊ぼう</div>
<div class="logo">鉄道模型で遊ぼう</div>
</div> -->
        </div>
        <br>
        <div class="menu">
            <div>主催：遠軽鉄道趣味の会</div>
            <div><a href="">協力：Rail Park Sapporo</a></div>
            <div><a href="">協力：遠軽鉄道模型館</a></div>
        </div>

';



if ($_SESSION["windowsize"] >= 870) {

    $header = '
                <div class="header1">
                <div class="logo">鉄道模型で遊ぼう</div>
    <!-- <div>
        <div class="logo">鉄道模型で遊ぼう</div>
        <div class="logo">鉄道模型で遊ぼう</div>
    </div> -->
                </div>
                <br>
                <div class="menu">
                    <div><p onclick="handleClick(1)">TOP</p></div>
                    <hr>
                    <div><p onclick="handleClick(2)">Nゲージとは</p></div>
                    <hr>
                    <div><p onclick="handleClick(3)">車両紹介</p></div>
                    <!--<hr>
                    <div><p onclick="handleClick(4)">車両紹介</p></div>-->
                    <hr>
                    <div><p onclick="handleClick(5)">主催・協力</p></div>
                </div>

    ';

    $css .= '
        .header1{
        
                    display: flex;
                    justify-content: space-between;
}

        .logo {
          font-size: 30px;
          margin: 0 auto;
        }

        .menu {
            width:400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            //background:rgb(68, 229, 250);
        }

        .menu2{
            width:750px;
            margin: 0 auto;
            padding:0 20;
            display: flex;
            justify-content: space-evenly;
            color:rgb(76, 227, 247);
            //background:rgb(255, , 247);
            color:rgb(255, 255, 255);
        }
        .menu_text{
        //width:300px
    }
        ';
} else if ($_SESSION["windowsize"] >= 650) {
    $header = '
                <div class="header1">
                <div class="logo">鉄道模型で遊ぼう</div>
    <!-- <div>
        <div class="logo">鉄道模型で遊ぼう</div>
        <div class="logo">鉄道模型で遊ぼう</div>
    </div> -->
                </div>
                
                <div class="menu">
                    <div><p onclick="handleClick(1)">TOP</p></div>
                    
                    <div><p onclick="handleClick(2)">Nゲージとは</p></div>
                   
                    <div><p onclick="handleClick(3)">車両紹介</p></div>
                    <!--
                    <div><p onclick="handleClick(4)">車両紹介</p></div>-->
                    
                    <div><p onclick="handleClick(5)">主催・協力</p></div>
                </div>

    ';

    $css .= '
           .header1{
        
                    display: flex;
                    justify-content: space-between;
}

        .logo {
          font-size: 30px;
          margin: 0 auto;
        }

        .menu {
            // width:90%;
            text-align: center;
            margin: 0 auto;
            //background:rgb(68, 229, 250);
        }

        .menu2{
            // width:90%;
            text-align: center;
            margin: 0 auto;
            padding:0 20;
            //background:rgb(255, , 247);
            color:rgb(255, 255, 255);
        }
        .menu_text{
        //width:300px
    }
    ';
} else {
    $header = '
                <div class="header1">
                <div class="logo">鉄道模型で遊ぼう</div>
    <!-- <div>
        <div class="logo">鉄道模型で遊ぼう</div>
        <div class="logo">鉄道模型で遊ぼう</div>
    </div> -->
                </div>
                
                <div class="menu">
                    <div><p onclick="handleClick(1)">TOP</p></div>
                    
                    <div><p onclick="handleClick(2)">Nゲージとは</p></div>
                   
                    <div><p onclick="handleClick(3)">車両紹介</p></div>
                    <!--
                    <div><p onclick="handleClick(4)">車両紹介</p></div>-->
                    
                    <div><p onclick="handleClick(5)">主催・協力</p></div>
                </div>

    ';

    $css .= '
           .header1{
        
                    display: flex;
                    justify-content: space-between;
}

        .logo {
          font-size: 30px;
          margin: 0 auto;
        }

        .menu {
            // width:90%;
            text-align: center;
            margin: 0 auto;
            //background:rgb(68, 229, 250);
        }

        .menu2{
            // width:90%;
            text-align: center;
            padding:0 20;
            //background:rgb(255, , 247);
            color:rgb(255, 255, 255);
        }
        .menu_text{
        //width:300px
    }
    ';
}
