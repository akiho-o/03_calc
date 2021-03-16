<?php
$a = $_POST['num1'];
$b = $_POST['num2'];
$ope = $_POST['selOpe'];

switch ($ope) {
    case "＋":
        $answer = $a + $b;
        break;
    case "－":
        $answer = $a - $b;
        break;
    case "×":
        $answer = $a * $b;
        break;
    case "÷":
        $answer = $a / $b;
        break;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>計算結果</h1>
    <p>
        <?= $a . $ope . $b . " = " . $answer . "\n" ?>
    </p>
    <a href="calc_form.php">戻る</a>
</body>
</html>