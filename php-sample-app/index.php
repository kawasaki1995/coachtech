<?php
$name = htmlspecialchars($_POST['name'] ?? 'World', ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello App</title>
</head>
<body>
    <form method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>
    <h1>Hello, <?= $name ?>!</h1>
</body>
</html>