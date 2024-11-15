
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列を定義
        $nums = [4, 10, 15, 18, 23];

        // 独自のソート関数
        function sort_2way(&$array, $order = true) {
            if ($order) {
                // 昇順
                sort($array);
            } else {
                // 降順
                rsort($array);
            }
        }

        // 昇順にソート
        $asc_nums = $nums;
        sort_2way($asc_nums);

        // 昇順の結果を表示
        echo "昇順にソートします:<br>";
        foreach ($asc_nums as $num) {
            echo $num . "<br>";
        }

        echo "<br>";

        // 降順にソート
        $desc_nums = $nums;
        sort_2way($desc_nums, false);

        // 降順の結果を表示
        echo "降順にソートします:<br>";
        foreach ($desc_nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>