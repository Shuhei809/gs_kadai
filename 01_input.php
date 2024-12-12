<html>

<head>
    <meta charset="utf-8">
    <title>アンケートアプリ</title>
</head>

<body>
    <form action="02_write.php" method="post">
        お名前: <input type="text" name="name">
        出身: <input type="text" name="birthPlace">
        <input type="submit" value="送信">
    </form>

    <?php
    if (isset($_GET['message'])) {
    echo "<p style='color: green;'>". $_GET['message'] . "</p>";
    }
            // メッセージ表示後にリロードしてクエリパラメータを削除
        echo "<script>
            window.history.replaceState(null, null, window.location.pathname);
        </script>";
    ?>

<?php
$data = file_get_contents("data/data.txt");
echo nl2br($data); //brタグはhtmlの改行,/nlタグを brタグにして
?>
</body>

</html>
