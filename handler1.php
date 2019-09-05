<?php
if(isset($_GET['btn'])){
    echo 'Your login is'. $_GET['login'].'<br>';
    echo 'Your password is'. $_GET['password'].'<br>';
    echo  $_GET['sex'].' Your sex!!'.'<br>';

}
else{
    echo 'No data!!!';
}