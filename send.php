<?php
//フォーム以外から直接アクセスされた場合、contact.phpにリダイレクト
if ($_SERVER['REQUEST_METHOD']!=='POST'){
    header('Location:contact.php');
    exit;
}

//1つ前の確認画面からPOSTで送られてきたデータを受け取る
$name=$_POST['name']??'';
$companyName=$_POST['companyName']??'';
$email=$_POST['email']??'';
$age=$_POST['age']??'';
$message=$_POST['message']??'';

//メール送信の設定
$to='your_email@example.com';
$subject='お問い合わせがありました';
$body=
    "名前:{$name}\n".
    "会社名:{$companyName}\n".
    "メールアドレス:{$email}\n".
    "年齢:{$age}\n".
    "お問い合わせ内容:\n{$message}";
    $headers="From:{$email}";

//メール送信を実行し、成功・失敗を分岐する
if(mail($to,$subject,$body,$headers)){
    //送信成功時のメッセージ
    $result_message='お問い合わせが送信されました。ありがとうございます！';
}else{
    //送信失敗時のメッセージ
    $result_message='メールの送信が失敗しました。';
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム-送信完了画面</title>
</head>
<body>
    <header>
        <h1>お問い合わせフォーム-送信完了画面</h1>
</header>
<!--メッセージを表示する-->
<P><?php echo $result_message; ?></p>
<nav>
    <ul>
        <li><a href="contact.php">お問い合わせフォームに戻る</a></li>
</ul>
</nav>
</body>
</html>


