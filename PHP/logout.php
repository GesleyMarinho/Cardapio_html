<?php

if(!isset($_SESSION)) {
    session_start();
}
// pra sair da conta.
session_destroy();

Header("Location: ../index.html"); // aqui deve chamar no na tela inicial para logar após o cadastrado;
?>