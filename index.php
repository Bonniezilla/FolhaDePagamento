    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Sistema de folha de pagamento</title>

    </head>

    <body>
        <div align="center">
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
                case "menu";
                default;
                    exibirMenu();
            }
            ?>

    </body>

    <?php
    function exibirMenu()
    {
    ?>
        <script src="./js/index.js"></script>

        <h2>Menu</h2>
        <hr>
        <br>
        <button class="listButtonEl"> Relação de Funcionários</button>
        <button class="consultButtonEl">Consulta de Funcionário</button>
        </div>
    <?php
    }
    ?>

    </html>