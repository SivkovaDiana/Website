<?php
include "app/database/db.php";

$errMsg='';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF=trim($_POST['pass-first']);
    $passS=trim($_POST['pass-second']);
    $admin = 0;

    if($login === '' || $email === '' || $passF === '') {
        $errMsg="Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 2) {
        $errMsg = "Логин должен быть более 2-ч символов";
    }elseif ($passF === $passS) {
        $errMsg = "Пароли должны совпадать в обоих полях!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if  (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin, 
                'username' => $login, 
                'email' => $email, 
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . admin/admin.php);
            }else{
                header('location: ' . BASE_URL);
            }
            
        }
        
    }
}else{
    echo 'GET';
    $login = '';
    $email = '';
}

// Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        array_push($errMsg, "Не все поля заполнены!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);
        }else{
            array_push($errMsg, "Почта либо пароль введены неверно!");
        }
    }
}else{
    $email = '';
}

?>