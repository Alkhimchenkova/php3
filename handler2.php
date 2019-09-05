<?php
if(isset($_POST['btn'])){
    echo 'Your login is '. $_POST['login'].'<br>';
    echo 'Your password is '. $_POST['password'].'<br>';
    echo  $_POST['sex'].' Your sex!!'.'<br>';

}
else{
    echo 'No data!!!';
}