<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <form action="resultat.php" method="post">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input type="radio" name="operator" value="+">+
        <input type="radio" name="operator" value="-">-
        <input type="radio" name="operator" value="*">*
        <input type="radio" name="operator" value="/">/
        <input type="submit" name="send" value="Рассчитать">
</form>
</body>
</html>