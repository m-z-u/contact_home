<?php

//getできた場合は、　index.htmlに戻す
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    header('Location: index.html');
    exit;
}


    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されていません。';
    } else {
        $nickname_result = 'ようこそ、' . $nickname .'様';
    }
    
    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません。';
    } else {
        $email_result = 'メールアドレス：' . $email;
    }

    if ($content == '') {
        $content_result =  'お問い合わせ内容が入力されていません。';
    } else {
        $content_result = 'お問い合わせ内容：' . $content;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
<h1>入力内容確認</h1>
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>
    <button type="button" onclick="history.back()">戻る</button>
    <!-- thanks.php にポスト送信するためのボタン-->
    <form method="POST" action="thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($nickname != '' && $email != '' && $content != ''): ?>
            <input type="submit" value="OK">
        <?php endif; ?>
    </form>
</body>
</html>