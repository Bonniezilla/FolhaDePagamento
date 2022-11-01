<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastro de funcionário</title>
</head>
<body>
    <h2>CADASTRO DE FUNCIONÁRIO</h2>
        <?php
        $registro = null;

        if(isset($_POST['registro']) && ($_POST['registro'] != '')) {
            gravarDados($registro);
        } else {
            formCadastro();
        }

        function gravarDados($registro) {
            include_once 'lib/conexao.inc.php';

            $mensagemErro = null;

            $registro = $_POST['registro'];
            $nome = addslashes($_POST['nome']);
            $cargo = $_POST['cargo'];

            $query = "SELECT * FROM funcionarios WHERE registro = $registro";

            $resultado = mysqli_query($con, $query);

            if(mysqli_num_rows($resultado) > 0) {

                $mensagemErro = "Registro $registro já existente";

            } else {

                $query = "INSERT INTO funcionarios VALUES ($registro, '$nome', '$cargo');";
                $resultado = mysqli_query($con, $query);

                if ($resultado) {
                    $mensagemErro = 'Gravação feita com sucesso';
                } else {
                    $mensagemErro = 'Erro na gravação de Dados';
                    msqli_close($con);

                }
            }
        }
        formCadastro($mensagemErro);

        function formCadastro($mensagemErro = null) {

            ?>
            <form action="index.php?op=cadastro_func" method="post">
                <input type="text" name="registro" placeholder="REGISTRO">
                <input type="text" name="nome" placeholder="NOME">
                <input type="text" name="cargo" placeholder="CARGO">
                <button class="buttons">Enviar</button>
                <a href="index.php" class="buttons">Voltar ao menu</a>
                <p style="color: red;"><?= $mensagemErro ?></p>
            </form>
            <?php
        }

        ?>
</body>
</html>