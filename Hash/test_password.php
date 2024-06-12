<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="decrypt_password.php" method="POST">
        <label for="pass">Select passwords</label>
        <input type="text" name="pass" id="pass"/><br/>
        <label for="hash">Select hash passwords</label>
        <input type="text" name="hash" id="hash"/><br/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>