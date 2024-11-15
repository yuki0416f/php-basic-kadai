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

        // 昇順にソート
        $asc_nums = $nums; // 元の配列を保持するためコピー
        sort($asc_nums); // 昇順にソート

        // 昇順の結果を表示
        echo "昇順にソートします:<br>";
        foreach ($asc_nums as $num) {
            echo $num . "<br>";
        }

        echo "<br>"; // 改行

        // 降順にソート
        $desc_nums = $nums; // 元の配列を保持するためコピー
        rsort($desc_nums); // 降順にソート

        // 降順の結果を表示
        echo "降順にソートします:<br>";
        foreach ($desc_nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>
