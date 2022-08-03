<?php

// Login Controller

loadModel('Login');
$exception = null;

if (count($_POST) > 0) 
{
    $login = new Login($_POST);
    try 
    {
        $user = $login->checkLogin();
        echo "Usuário: {$user->name} logado.";
    } catch (Exception $e) 
    {
        echo "Falha no Login";
    }
}

loadView('login', $_POST);

// HEREIN: OSJ Cap. 255 Validacoes Login