<?php

   /* $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    echo $_POST['usuario'];
    echo $_POST['senha'];
  
    
    
    if ($_POST['usuario'] && $_POST['senha']){
        echo "<h1> Ok você entrou </h1>";
        echo "<a href = 'home.html'>Clique aqui para entrar</a>";
    }else{
        echo "Você não está logado";
    }*/

include('./PHP/teste.php');
    //vamos verificar se os campos existem.
    if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    //vou ferificar sem os caracteres estao em branco
        if(strlen($_POST['usuario']) == 0) {
            echo "Preencha seu usuario";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
            // aqui é pra limpar as senhas quando for entrar
            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
            //agora vai selecionar a tabela do banco de dados pra salvar
            $sql_code = "SELECT * FROM cliente WHERE user = '$usuario' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code); //or die("Falha na execução do código SQL: " . $mysqli->error);

    //aqui vou saber se o cara está cadastrado, se tiver, deu certo, se nao, a senha esta incorreta
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                Header("Location: home.html"); //aqui é pra ir pra pagina ja logada, pagina principal

            } else {
                echo "Falha ao logar! Usuário ou senha incorretos";
            }

        }

}
?>

