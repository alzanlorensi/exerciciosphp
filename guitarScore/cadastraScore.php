<html xlmns="http://wwww.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Guitar War</title>
        <link rel="shortcut icon" href="../img/guitar.ico" type="image/x-icon">
    </head>
    <body>
        <h2>Guitar War- Score</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <?php
            if (isset($_POST['enviar'])) {
                $nome = $_POST['nome'];
                $score = $_POST['score'];
                if (!empty($name) && empty($score)) {
                    $db = mysqli_connect('localhost', 'root', '1234', 'exercicios') or die("Deu ruim");
                    $query = "INSERT INTO guitarwar values (0,'$name', NOW(),'$score'); ";
                }
            }
            ?>


            <hr/>
            <table border="1" align="center">
                <tbody>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" id="nome" name="nome" value="<?php if (!empty($name)) echo "$name"; ?>"><br></td>
                    </tr>
                    <tr>
                        <td>Score</td>
                        <td><input type="text" value="<?php if (!empty($score)) echo $score; ?>"</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Enviar" name="enviar" id="enviar"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>