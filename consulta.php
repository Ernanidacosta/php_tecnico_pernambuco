<?php
//fazendo a conexão com o banco de dados test
    $link = mysqli_connect("localhost", "root", "", "test");
//checando a conexão
    if(!$link) {
        printf ("Erro ao conectar ao banco de dados: ", mysqli_connect_errno());
}
//query SQL para selecionar os dados
    $lista = mysqli_query($link, "SELECT * FROM etepac");
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        th {
            text-align: left;
    </style>
</head>

<body>

    <h2>Notas</h2>
    <table style="width: 100%">
        <tr>
            <th>Nome do aluno</th>
            <th>Disciplina</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
        </tr>
        <tr>
            <td>Aluno</td>
            <td>Disciplina</td>
            <td>Nota 1</td>
            <td>Nota 2</td>
            <td>Nota 3</td>
        </tr>
    </table>
</body>

</html>