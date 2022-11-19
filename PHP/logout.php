<?php

if(!isset($_SESSION)) {
    session_start();
}
// pra sair da conta.
session_destroy();

header("Location: index.php");