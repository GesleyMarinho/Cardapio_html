<?php
  
  // Server name must be localhost
  $servername = "localhost";
    
  // In my case, user name will be root
  $username = "root";
    
  // Password is empty
  $password = "";
  $dbname = "CADASTRO";
    
  // Creating a connection
  $conn = new mysqli($servername, 
              $username, $password, $dbname);
    
  // Check connection
  if ($conn->connect_error) {
    echo "Conexão falhou".
      die("Connection failure: "
          . $conn->connect_error);
  } else{
    echo "Conexão SUCESSO";
  }

  /*$sql = "INSERT INTO CLIENTE (USER, EMAIL, SENHA,CONFIRMASENHA)
  VALUES ('John','john@example.com', 123,123)";*/

  $sql = "INSERT INTO CLIENTE (USER, EMAIL, SENHA,CONFIRMASENHA)
  VALUES (:nome, :email,:senha,:confirmaSenha)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    
  $conn->close();
?>