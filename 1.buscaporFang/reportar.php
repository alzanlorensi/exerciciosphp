<html>
    <head> <title>Alianigenas me abduziram- Reportar uma abducão.</title></head>
    

<body>
     <h2 style="color: blue; font-style: italic; font-family: Calibri">Alianígenas me abduziram- Relate uma abdução.</h2>
</body>
</html>
<?php
$db= mysqli_connect('localhost', 'root' ,'' , 'exercicios') or die("Erro ao conectar com o servidor");

$nome= $_POST['primeironome'];
$sobrenome= $_POST['sobrenome'];
$quando_aconteceu= $_POST['quando'];
$quanto_tempo= $_POST['tempofora'];
$descricao_alien= $_POST['descricao'];
$fang_visto= $_POST['verFang'];
$email= $_POST['email'];
$quantosaliens= $_POST['quantos'];
$fizeram= $_POST['fizeram'];
$add= $_POST['algo'];
$query= "INSERT INTO `abducao`(`primeiro_nome`, `sobrenome`, `aconteceu`, `quanto_tempo`, `quantos`, `descricao`, `fizeram`, `fang`, `outro`, `email`) VALUES ('$nome','$sobrenome','$quando_aconteceu','$quanto_tempo','$quantosaliens','$descricao_alien','$fizeram','$fang_visto','$add','$email')";
echo"$nome foi abduzido $quando_aconteceu e ficou fora por $quanto_tempo <br>\n"
        ."Descrição do Alien: $descricao_alien <br>"
        . "Os aliens estavam num total de: $quantosaliens <br>"
        ."Eles fizeram: $fizeram <br> Voce viu o Fang? $fang_visto <br> Tem mais algo a dizer?: $add";
$result= mysqli_query($db, $query) or die('Deu ruim clã');
mysqli_close($db);

