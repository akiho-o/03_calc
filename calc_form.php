<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算アプリ</title>
</head>
<body>
    <h1>計算アプリ</h1>
    <h2>計算式を入力してください</h2>
    <form name="form1" action="../03_calc/answer.php" method="post">
        <input type = "number" required="required" name = "num1">
        <select name="selOpe" size=1>
            <option value = "＋">＋</option>
            <option value = "－">－</option>
            <option value = "×">×</option>
            <option value = "÷">÷</option>
        </select>
        <input type = "number" required="required" name = "num2">
        <input type = "submit" value = "計算">
    </form>
</body>
</html>