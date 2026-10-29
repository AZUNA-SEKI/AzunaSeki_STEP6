<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム</title>
        <link rel="stylesheet" href="style.css">
        
</head>
<body>
    <header>
    <h2>お問い合わせフォーム</h2>
</header>
<nav>
    <ul>
        <li><a href="section1">トップページ</a></li>
        <li><a href="section2">人気投稿</a></li>
        <li><a href="section3">エンジニアおすすめ商品</a></li>
        <li><a href="section4">エンジニアおすすめ記事</a></li>
        <li><a href="section5">投稿ページ</a></li>
</ul>
</nav>
<!--formタグでテーブルと送信ボタンを囲む-->
<form action="confirm.php" method="post">
<table border="3px">
    <tr>
        <th>お名前</th>
        <td><input type="text" name="name" id="name" size="40"></td>
</tr>
<tr>
        <th>会社名</th>
        <td><input type="text" name="companyName" id="companyName" size="40"></td>
</tr>
<tr>
        <th>メールアドレス</th>
        <td><input type="text" name="email" id="email" size="40"></td>
</tr>
<tr>
        <th>年齢</th>
        <td><input type="text" name="age" id="age" size="40"></td>
</tr>
<tr>
        <th>お問い合わせ内容</th>
        <td><textarea name="message" id="message" rows="4" cols="40"></textarea></td>
</tr>
</table>
<!--inputタグを使った送信ボタン-->
<input type="submit" value="送信">
</form>

<P>横のボタンを押すとfooterの背景色が変わります。</p><br>
<!--footerの中にボタンを配置-->

<footer>
<button id="try">押してみてね！</button>
</footer>
<script src="style.js"></script>
</body>
</html>




