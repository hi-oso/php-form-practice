<?php

$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>

<body>
    <p>以下の内容で登録します。よろしいですか？</p>
    <p>｜ お名前 ｜<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>｜ メールアドレス ｜<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>｜ 年齢 ｜<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></p>

    <form action="complete.php" method="post">
        <button type="submit">登録する</button>
        <button type="button" onclick="history.back();">戻る</button>
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
    </form>
</body>

</html>