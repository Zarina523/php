<?php

if (isset($_REQUEST["text"])) {
    $password = $_POST['text'];
    $length = preg_match('@(\S){10,}@', $password);
    $uppercase = preg_match('@(.*[A-Z]){2,}@', $password);
    $lowercase = preg_match('@(.*[a-z]){2,}@', $password);
    $number    = preg_match('@(.*\d){2,}@', $password);
    $symbol = preg_match('@(.*[%$#_*]){2,}@', $password);
    $numb = preg_match('@(\d){3,}@', $password);
    $upcs = preg_match('@[A-Z]{3,}@', $password);
    $lwcs = preg_match('@[a-z]{3,}@', $password);
    $smb = preg_match('@[%$#_*]{3,}@', $password);

    if(!$length) {
        echo 'пароль должен содержать не менее 10 символов';
    }
    elseif (!$uppercase){
        echo 'пароль должен содержать минимум 2 заглавные буквы';
    }
    elseif (!$lowercase){
        echo 'пароль должен содержать минимум 2 строчные буквы';
    }
    elseif (!$number){
        echo 'пароль должен содержать минимум 2 цифры';
    }
    elseif (!$symbol){
        echo 'пароль должен содержать минимум 2 символа %$#_*';
    }
    elseif ($numb){
        echo 'пароль не должен содержать более 3 цифр подряд';
    }
    elseif ($upcs){
        echo 'пароль не должен содержать более 3 заглавных букв подряд';
    }
    elseif ($lwcs){
        echo 'пароль не должен содержать более 3 строчных букв подряд';
    }
    elseif ($smb){
        echo 'пароль не должен содержать более 3 символов %$#_* подряд';
    }



} else require("form.html");
