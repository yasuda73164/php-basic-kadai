<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order === "up") {
                sort($array);
                echo "昇順にソートします。<br>";
                foreach ($array as $num) {
                    echo $num . "<br>";
                }
            } elseif ($order === "down") {
                rsort($array);
                echo "降順にソートします。<br>";
                foreach ($array as $num) {
                    echo $num . "<br>";
                }
            }
        }

        // 配列のデータ
        $num = [15, 4, 18, 23, 10];
        sort_2way($num, "up");
        sort_2way($num, "down");
        ?>
    </p>
</body>

</html>