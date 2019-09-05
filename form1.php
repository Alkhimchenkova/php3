<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="handler2.php" method="post">
    <p>Enter your login: <input type="text" name="login"></p>
    <p>Enter your password: <input type="password" name="password"></p>
    <p><input type="radio" checked name="sex" value="male">Male</p>
    <p><input type="radio" name="sex" value="female">Female</p>
    <p>
        <select name="city" >
            <option value="kr">Kriviy Rig</option>
            <option value="ls">Los Angeles</option>
            <option value="ny">New York</option>
        </select>
    </p>
<p><input type="submit" value="send" name="btn"></p>

</form>
</body>
</html>