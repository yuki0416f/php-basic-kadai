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
        $nums = [15, 4, 18, 23, 10];

        // ソート関数sort_2wayの宣言
        function sort_2way(&$array, $order) {
            if ($order === "asc") {
                // 昇順
                sort($array); // 正しいPHP標準関数（sort）を選定
            } elseif ($order === "desc") {
                // 降順
                rsort($array); // 正しいPHP標準関数（rsort）を選定
            } else {
                echo "Invalid order parameter. Use 'asc' or 'desc'.<br>";
            }
        }

        // 昇順にソート
        $asc_nums = $nums;
        sort_2way($asc_nums, "asc"); // 昇順で関数を呼び出す

        // foreach文でソート結果を表示
        echo "昇順にソートします:<br>";
        foreach ($asc_nums as $num) {
            echo $num . "<br>";
        }

        echo "<br>";

        // 降順にソート
        $desc_nums = $nums;
        sort_2way($desc_nums, "desc"); // 降順で関数を呼び出す

        // foreach文でソート結果を表示
        echo "降順にソートします:<br>";
        foreach ($desc_nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>
