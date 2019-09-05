<?php
$login=$password=$sex=$city='';
$loginErr=$passwordErr='';
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

        if($loginErr==''&& $passwordErr==''){
    echo 'Date are correct!!!';
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
<form action="form2.php" method="post">
    <p>
        Enter your login: <input type="text" name="login" value="<?=$login?>">
        <span style="color:red"><?=$loginErr?></span></span>
    </p>
    <p>
        Enter your password: <input type="password" name="password" value="<?=$password?>">
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