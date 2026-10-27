<?php
//フォーム以外から直接アクセスされた場合、contact.phpにリダイレクト
if ($_SERVER['REQUEST_METHOD']!=='POST'){
    header('Location:contact.php');
    exit;
}

//入力されていない項目がないかチェックする
if (
    empty($_POST['name'])||
    empty($_POST['companyName'])||
    empty($_POST['email'])||
    empty($_POST['age'])||
    empty($_POST['message'])
){
    echo'未入力の項目があります。戻るボタンからやり直して下さい。';
    exit;
}
//POSTデータを受け取り、安全のためにHTMLにエスケープする
$name = htmlspecialchars($_POST['name']??'',ENT_QUOTES,'UTF-8');
$companyName = htmlspecialchars($_POST['companyName']??'',ENT_QUOTES,'UTF-8');
$email = htmlspecialchars($_POST['email']??'',ENT_QUOTES,'UTF-8');
$age = htmlspecialchars($_POST['age']??'',ENT_QUOTES,'UTF-8');
$message = htmlspecialchars($_POST['message']??'',ENT_QUOTES,'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム-確認画面</title>
</head>
<body>
    <header>
    <h2>お問い合わせフォーム-確認画面</h2>
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
<form action="send.php" method="post">
<table border="3px">
    <tr>
        <th>お名前</th>
        <td>
            <?php echo $name; ?>
            <input type="hidden" name="name" value="<?php echo $name;?>">
        </td>
</tr>
<tr>
        <th>会社名</th>
        <td>
            <?php echo $companyName; ?>
                <input type="hidden" name="companyName" value="<?php echo $companyName;?>">
    </td>
</tr>
<tr>
        <th>メールアドレス</th>
        <td>
            <?php echo $email; ?>
            <input type="hidden" name="email" value="<?php echo $email;?>">
        </td>
</tr>
<tr>
        <th>年齢</th>
        <?php echo $age; ?>
            <input type="hidden" name="age" value="<?php echo $age;?>">
        </td>
</tr>
<tr>
        <th>お問い合わせ内容</th>
        <td>
            <?php echo nl2br($message);?>
            <input type="hidden" name="message" value="<?php echo $message; ?>
        </td>
</tr>
</table>
<input type="submit" value="送信"><br>
<input type="button" onclick="戻る">
</form>
</body>
</html>
