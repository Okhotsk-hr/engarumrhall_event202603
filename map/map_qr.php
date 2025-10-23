<?php
try {
    $pdo = new
        PDO('mysql:dbname=engarumrhall_events;charset=utf8;host=localhost', 'engarumrhall_events', 'eventsdata');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
}

//データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO event202503_map_qr(number,date)VALUES(NULL, sysdate())");

// $stmt->bindValue(':a1', $staffn, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:" . $error[2]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

</body>

<script>
    window.location.href = "index.php";
</script>

</html>