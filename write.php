<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

<?php
require_once'functions.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = h($_POST['company']);
    $department = h($_POST['department']);
    $position = isset($_POST['position']) ? h($_POST['position']) : '';
    $name = h($_POST['name']);
    $email = h($_POST['email']);
    $age = h($_POST['age']);
    $rating = h($_POST['rating']);
    $reason = isset($_POST['reason']) ? h($_POST['reason']) : '';

    // var_dump($company, $department, $position, $name, $email, $age, $rating, $reason);

    $file = fopen('data.csv', 'a');
    $data = [$company, $department, $position, $name, $email, $age, $rating, $reason];
    fputcsv($file, $data);
    fclose($file);

    echo "データが保存されました。<br>";
    echo "<a href='read.php'>データを表示する</a>";
}
?>


</body>

</html>