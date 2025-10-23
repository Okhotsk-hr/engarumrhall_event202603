<?php
//何のファイルだろう
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .title {
            font-size: 40px;
        }

        p {
            font-size: 20px;
        }

        .data {
            /* width: 250px;
            position: relative;
            margin: auto; */
        }

        .text1 {
            font-size: 35px;
        }

        .layout {
            line-height: 20px;
        }

        .layout_title {
            font-size: 28px;
        }

        .date {
            line-height: 10px;
        }

        .place {
            /* width: 270px; */
            /* margin: auto; */
        }

        .place_text {
            /* width: 270px; */
            line-height: 10px;
        }

        .flex1 {
            width: 600px;
            display: flex;
            justify-content: space-between;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="flex1">
        <div class="flex11">
            <div class="date">
                <p class="title">日時</p>
                <p>2024年3月</p>
                <p>23日（土）:10時～18時</p>
                <p>24日（日）:10時～16時</p>
            </div>

            <p class="text1">入退場自由！</p>
        </div>
        <div class="flex12">
            <p class="layout_title">各レイアウトにて <br>無料運転体験あり!</p>

            <div class="layout">
                <p>
                    車両の持ち込みOK<br>
                    車両を持っていなくても<br>
                    用意している車両から<br>
                    好きな車両を選んで<br>
                    走らせられます
                </p>
            </div>
        </div>
    </div>

    <div class="flex1">
        <div class="place">
            <div>　</div>
            <div class="place_text">
                <p class="title">場所</p>
                <p>遠軽町芸術文化交流プラザ</p>
                <p>メトロプラザ2F多目的室4・5</p>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.1807237712064!2d143.517969276063!3d44.05897667108584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f12a1305c4d097b%3A0xb256d5c14fb15c6d!2z6YGg6Lu955S66Iq46KGT5paH5YyW5Lqk5rWB44OX44Op44K2IOODoeODiOODreODl-ODqeOCtg!5e0!3m2!1sja!2sjp!4v1707444218871!5m2!1sja!2sjp" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</body>

</html>