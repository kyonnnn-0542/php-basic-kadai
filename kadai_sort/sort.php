<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order = TRUE) {
            if ($order) {
                sort($array);   // 昇順ソート
                echo "昇順にソートします。<br>";
            } else {
                rsort($array);  // 降順ソート
                echo "降順にソートします。<br>";
            }

            // foreach文で1つずつ表示
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // 使用例
        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, TRUE);   // 昇順
        sort_2way($nums, FALSE);  // 降順
        ?>
    </p>
</body>

</html>