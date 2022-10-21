<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Consulta de funcionáro</title>
    <script src="js/default.js"></script>
</head>
<body>
    <h1>CONSULTA DE FUNCIONÁRIO</h1>
    <hr>
    <br>

    <?php

    $registro = null;

    if(isset($_GET['id'])) {
        $registro = ($_GET['id']);
        exibirDados($registro);
    } else if (isset($_POST['id'])) {
        $registro = $_POST['id'];
        exibirDados($registro);
    } else {
        solicitarRegistro();
    }
    
    function exibirDados($registro) {
        include_once 'lib/conexao.inc.php.';

        $query = "SELECT registro, nome, cargo FROM funcionarios WHERE registro = $registro";

        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0) {
            
            $dados = mysqli_fetch_array($result, MYSQLI_ASSOC);

            ?>

            <p>Registro: <b><?= $dados['registro'] ?></b></p>
            <p>Nome: <b><?= $dados['nome'] ?></b></p>
            <p>Cargo: <b><?= $dados['cargo'] ?></b></p>
            <hr>
            <br>
            <p>
                <a href="index.php?op=consult_func">Nova Consulta</a>
            </p>
            <p>
                <a href="index.php?op=lista_func">Relação de funcionários</a>
            </p>
            <p>
                <a href="index.php">Voltar ao menu</a>
            </p>
            <?php
        
        } else {
            echo "Não foi possível achar um registro";
            ?>
            
            <button id="menubtn_el">Voltar ao menu</button>

            <?php
        }
        
        mysqli_free_result($result);

        mysqli_close($con);
    }

    function solicitarRegistro() {
    
    ?>

        <form action="index.php?op=consult_func" method="post">
            <p>
                Informe o registro:
                    <input type="text" name="id" required>
            </p>
            <button>Enviar</button>
        </form>
        <button id="menubtn_el">Voltar ao menu</button>
        <?php

    }

    ?>
</body>
</html>