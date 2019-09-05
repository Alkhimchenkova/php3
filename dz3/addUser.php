<?php
$login=$password=$email=$sex=$city='';
$loginErr=$passwordErr=$emailErr='';
if($_SERVER['REQUEST_METHOD']=='POST'){


    $sex=test_input($_POST['sex']);
    $city=test_input($_POST['city']);

    if(empty($_POST['login'])){
        $loginErr='This field is required';
    }else{
        $login=test_input($_POST['login']);
    }
    if(empty($_POST['password'])){
        $passwordErr='This field is required';
    }else{
        $password=test_input($_POST['password']);}
    if(empty($_POST['email'])){
        $emailErr='This field is required';
    }else{
        $email=test_input($_POST['email']);
    }

    if($loginErr==''&& $passwordErr==''&&$emailErr==''){
        echo 'Date are correct!!!';

    $fp = fopen("users.txt", "a"); // Открываем файл в режиме записи
    $user = $login.':'.$password.':'.$email.':'.$sex.':'.$city.':'.PHP_EOL; // Исходная строка
    $test = fwrite($fp, $user); // Запись в файл
    if ($test) echo 'Данные в файл успешно занесены.';
    else echo 'Ошибка при записи в файл.';
    fclose($fp); //Закрытие файла


    }else{
        echo 'You`re stupid user!!! ';
    }


}

function test_input($data){
    $data=trim($data);//убираем пробелы
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);//экранируем html-код

    return$data;
}
?>
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
<form action="#" method="post">
    <p>
        Enter your login: <input type="text" name="login" value="<?=$login?>">
        <span style="color:red"><?=$loginErr?></span></span>
    </p>
    <p>
        Enter your password: <input type="password" name="password" value="<?=$password?>">
        <span style="color:red"><?=$passwordErr?></span>
    </p>
    <p>
        Enter your email: <input type="email" name="email" value="<?=$email?>">
        <span style="color:red"><?=$passwordErr?></span>
    </p>
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