<?php
    $link = mysqli_connect("localhost", "root", "", "test");

    //ckeck connectioin
        if(!$link) {
            printf ("Erro ao Conectar ao Banco: ", mysqli_connect_errno());
        }

    //Variables declaration
        $aluno = $_POST('aluno');
        $disciplina = $_POST('disciplina');
        $nota1 = $_POST('nota1');
        $nota2 = $_POST('nota2');
        $nota3 = $_POST('nota3');

    //SQL query
        $query = "INSERT INTO etepac (aluno, disciplina, nota1, nota2, nota3) VALUES ('$aluno','$disciplina', '$nota1',  '$nota2', '$nota3')";
    
    //SQL command execute
        mysqli_query($link, $query);

    //Show confirmation
        echo "Dados Inseridos"
?>