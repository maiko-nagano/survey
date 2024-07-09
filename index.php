<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>アンケートフォーム</h1>
        <form action="write.php" method="post">
            <label for="company">企業名:<span class="required">必須</span></label>
            <input type="text" id="company" name="company" required><br>
            <label for="department">部署名:<span class="required">必須</span></label>
            <input type="text" id="department" name="department" required><br>
            <label for="position">役職:</label>
            <input type="text" id="position" name="position"><br>
            <label for="name">名前:<span class="required">必須</span></label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">メールアドレス:<span class="required">必須</span></label>
            <input type="email" id="email" name="email" required><br>
            <label for="age">年代:<span class="required">必須</span></label>
            <select id="age" name="age" required>
                <option value="10代以下">10代以下</option>
                <option value="20代">20代</option>
                <option value="30代">30代</option>
                <option value="40代">40代</option>
                <option value="50代">50代</option>
                <option value="60代以上">60代以上</option>
            </select><br>
            <legend>研修の評価:<span class="required">必須</span></legend>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" required><label for="star5" title="5 stars">★</label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars">★</label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars">★</label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars">★</label>
                <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star">★</label>
            </div><br>
            <label for="reason">理由:</label>
            <textarea id="reason" name="reason"></textarea><br>
            <label>
            <input type="checkbox" id="agree" name="agree" required disabled> 
            <a href="https://www.humanlink.co.jp/corporate/privacy.html" target="_blank" id="privacy-link">個人情報の取り扱い</a>に同意します
            </label><br>
            <input type="submit" value="送信">
        </form>
    </div>
    <script src='./index.js'></script>
</body>

</html>