<?php

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="ja">
<html>

<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
</head>

<body>
    <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！ </p>
    <p>確認メールを<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>に送信しました。</p>
    <p><a href="input.php">入力画面に戻る</a></p>
</body>

</html>