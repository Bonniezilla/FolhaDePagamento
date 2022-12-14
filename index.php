<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Sistema de folha de pagamento</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <div class="header">
            <h1>Sistema de folha de pagamentos</h1>

            <?php
            if (isset($_GET['op'])) {
                $opcao = $_GET['op'];
            } else {
                $opcao = 'menu';
            }

            switch ($opcao) {
                case "lista_func";
                    require_once("rotinas/lista_funcionarios.inc.php");
                    break;
                case "consult_func";
                    require_once("rotinas/consulta_funcionario.inc.php");
                    break;
                case 'cadastro_func';
                    require_once('rotinas/cadastro_funcionario.inc.php');
                    break;
                case "menu";
                default;
                    exibirMenu();
            }
            ?>


            <?php

            function exibirMenu() {
                ?>
                <h1>Menu</h1>
            </div>
            <main>
                <div class="buttons">
                    <a href="index.php?op=lista_func"> Relação de Funcionários</a>
                    <a href="index.php?op=consult_func">Consulta de Funcionário</a>
                    <a href="index.php?op=cadastro_func">Cadastro de Funcionário</a>

                </div>

            </main>

            <script src="./js/default.js"></script>
            <?php
        }
        ?>
    </body>

</html>