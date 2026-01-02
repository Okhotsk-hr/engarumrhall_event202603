<?php
session_start();
$_SESSION["css"] = "";
//echo $_SESSION["save"];
//$reload = false;
// session_start();
// if (!isset($_SESSION["save"])) {
//     echo "!isset";
//     try {
//         $pdo = new
//             PDO('mysql:dbname=engarumrhall_events;charset=utf8;host=localhost', 'engarumrhall_events', 'eventsdata');
//     } catch (PDOException $e) {
//         exit('データベースに接続できませんでした。' . $e->getMessage());
//     }

//     //データ登録SQL作成
//     $stmt = $pdo->prepare("INSERT INTO event202503_vehicles(number,date)VALUES(NULL, sysdate())");

//     $status = $stmt->execute();

//     //データ登録処理後
//     if ($status == false) {
//         //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
//         $error = $stmt->errorInfo();
//         exit("QueryError:" . $error[2]);
//     }
// } else if (($_SESSION["save"]) == 1) {
//     echo "save";
//     try {
//         $pdo = new
//             PDO('mysql:dbname=engarumrhall_events;charset=utf8;host=localhost', 'engarumrhall_events', 'eventsdata');
//     } catch (PDOException $e) {
//         exit('データベースに接続できませんでした。' . $e->getMessage());
//     }

//     //データ登録SQL作成
//     $stmt = $pdo->prepare("INSERT INTO event202503_vehicles(number,date)VALUES(NULL, sysdate())");

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
//echo " <script>alert('windowsiae_checker');</script>";
include("../elements/windowsize_checker.php");

//echo "ブラウザの幅は" . $_SESSION["windowsize"];

include("../elements/bulk_css.php");
include("../elements/header.php");

//include("../elements/base_announcement.php");

//セッション変数"text"が存在しないなら、0に設定
if (!isset($_SESSION["hnum"])) {
    $_SESSION["hnum"] = "0";
} else {
    include("../elements/header_move.php");
}

if ($_SESSION["size_turn"] == 1) {
    $_SESSION["hnum"] = "0";
}

include("first_search.php");
//include("list_show_csv.php");
//include("search.php");
//include("allshow.php");

// $_SESSION["serchword"] = "a";

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
        <?= $css ?><?= $_SESSION["css"] ?>
    </style>
</head>

<body>
    <header class="header">

        <?= $header ?>

    </header>

    <form method="post" action="search.php">
        <label for="searchValue">検索する文字を入力してください:</label>
        <input type="text" id="searchValue" name="searchValue" maxlength="10    " required>
        <button type="submit">検索</button>
    </form>
    <form method="post" action="allshow.php">
        <button type="submit">リセット</button>
    </form>

    <!-- <?= $_SESSION["wordresult"] ?> -->
    <?= $_SESSION["v_cards"] ?>


    <?php
    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     // フォームから入力を取得
    //     $_SESSION["searchword"] = $_POST["searchValue"];
    //     include("search.php");
    //     echo "    <script>
    //     alert('" . $_SESSION["searchword"] . "');
    //     //location.reload();
    //     // window.location.href ='index.php';
    //     //alert('c');
    // </script>";
    // if ($reload) {
    //     $reload = false;
    //     echo "    <script>
    //     //alert('" . $_SESSION["searchword"] . "');
    //     location.reload();
    //     // window.location.href ='index.php';
    //     //alert('c');
    // </script>";
    // } else {
    //     //$reload = true;
    // }
    // }


    ?>

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