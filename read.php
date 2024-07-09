<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>アンケート結果</h1>
    <table border="1">
        <tr>
            <th>企業名</th>
            <th>部署名</th>
            <th>役職</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>年代</th>
            <th>研修の評価</th>
            <th>理由</th>
        </tr>
        <?php
        require_once 'functions.php';

        $data = [];
        if (($file = fopen('data.csv', 'r')) !== FALSE) {
            while (($row = fgetcsv($file)) !== FALSE) {
                $data[] = $row;
                echo "<tr>";
                foreach ($row as $index => $cell) {
                    if ($index == 6) {
                        echo "<td>";
                        for ($i = 0; $i < 5; $i++) {
                            echo $i < $cell ? "★" : "☆";
                        }
                        echo "</td>";
                    } else {
                        echo "<td>" . h($cell) . "</td>";
                    }
                }
                echo "</tr>";
            }
            fclose($file);
        }

        $average_rating = calculate_average_rating($data);
        ?>
    </table>
    <div class="average-rating">
        <h2>評価の平均: <?php echo number_format($average_rating, 2); ?></h2>
    </div>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>
</html>