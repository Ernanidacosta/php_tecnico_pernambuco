<?php
    $link = mysqli_connect("127.0.0.1", "root", "12345", "brtec");

    //ckeck connectioin
        if(!$link) {
            printf ("Erro ao Conectar ao Banco: ", mysqli_connect_errno());
        }

    //Variables declaration
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $nota = $_POST['nota'];
    //SQL query
        $query = "INSERT INTO CADALUNO (id, nome, cpf, nota) VALUES ('$id','$nome', '$cpf', '$nota')";
    
    //SQL command execute
        mysqli_query($link, $query);

    //Show confirmation
        echo "Dados Inseridos"
?>