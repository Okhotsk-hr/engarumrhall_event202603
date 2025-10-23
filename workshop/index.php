<?php
//ジオラマワークショップを今年やるかどうか

session_start();

// if (!isset($_SESSION["save"]) ||($_SESSION["save"]) == 1) {
//     try {
//         $pdo = new
//             PDO('mysql:dbname=engarumrhall_events;charset=utf8;host=localhost', 'engarumrhall_events', 'eventsdata');
//     } catch (PDOException $e) {
//         exit('データベースに接続できませんでした。' . $e->getMessage());
//     }

//     //データ登録SQL作成
//     $stmt = $pdo->prepare("INSERT INTO event202503_workshop(number,date)VALUES(NULL, sysdate())");

//     $status = $stmt->execute();

//     //データ登録処理後
//     if ($status == false) {
//         //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
//         $error = $stmt->errorInfo();
//         exit("QueryError:" . $error[2]);
//     }
// } 


$jump = "";
// session_start();
if (!isset($_SESSION["save"])) {
} else if (($_SESSION["save"]) == 1) {
}


$file_name = 'index.php';
include("../elements/windowsize_checker.php");

//echo "ブラウザの幅は" . $_SESSION["windowsize"];

include("../elements/bulk_css.php");
include("../elements/header.php");

include("workshop.php");

//セッション変数"text"が存在しないなら、0に設定
if (!isset($_SESSION["hnum"])) {
    $_SESSION["hnum"] = "0";
} else {
    include("../elements/header_move.php");
}

if ($_SESSION["size_turn"] == 1) {
    $_SESSION["hnum"] = "0";
}

// $i = 0;
// while (true) {
//     echo date("Y/m/d H:i:s");
//     echo '<br/>';
//     sleep(5);
//     $i = $i + 1;
//     if ($i == 5) {
//         break;
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鉄道模型で遊ぼう</title>
    <style>
        <?= $css ?>
        /* p {
            margin: auto;
            text-align: center;
        } */
    </style>
</head>

<body>
    <header class="header">

        <?= $header ?>

    </header>

    <?= $workshop ?>

    <?= $windowcheck ?>
    <script>
        // クリックイベントを設定
        function handleClick(hnum) {
            // 非同期リクエスト送信 (Ajax)
            fetch('../elements/process.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'hnum=' + encodeURIComponent(hnum)
                })
                .then(response => response.text())
                .then(data => {
                    //alert(data);
                    location.href = data;
                    //location.reload()

                });
        }
    </script>

</body>

</html>