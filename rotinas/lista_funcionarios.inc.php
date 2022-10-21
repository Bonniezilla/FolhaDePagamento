<?php
include_once "lib/conexao.inc.php";

$query = "SELECT registro, nome, cargo FROM funcionarios ORDER BY nome";

$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relação de funcionários</title>
    <script src="js/default.js"></script>
</head>

<body>

    <div align="center">

        <h1>Relação de Funcionários</h1>
        <hr>
        <br>
        <table>
            <tr>
                <th width="40">Registro</th>
                <th width="200">Cargo</th>
                <th width="200">Nome</th>
            </tr>
            <?php

            // Lê todas as ocorrências de consulta (linhas) e imprime na tela
            while ($linha = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td align="center"><?= $linha['registro'] ?></td>
                    <td>
                        <a href="index.php?op=consult_func&id=<?= $linha['registro']; ?>"><?= $linha['nome']; ?></a>
                    </td>
                    <td><?= $linha['cargo']; ?></td>
                </tr>

            <?php
            }
            ?>
        </table>
        <hr>
        <br>
        <button id="menubtn_el">Voltar ao menu</button>
    </div>
</body>

</html>