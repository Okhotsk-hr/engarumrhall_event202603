<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var setWindowSize = function() {
            $.ajax({
                type: "POST",
                url: "size.php", // 画面サイズを渡すPHPのURL
                data: "windowSize=" + $(window).width()
            });
        };
        setWindowSize();

        // リサイズした時にsessionを更新する為
        var timer;
        $(window).resize(function() {
            if (timer) clearTimeout(timer);
            timer = setTimeout(setWindowSize, 1000);
        });
    });
</script>

</html>