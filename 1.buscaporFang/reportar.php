<html>
    <head> <title>Alianigenas me abduziram- Reportar uma abducão.</title></head>
    

<body>
     <h2 style="color: blue; font-style: italic; font-family: Calibri">Alianígenas me abduziram- Relate uma abdução.</h2>

<?php

$nome_completo= $_POST['primeironome'].' '.$_POST['sobrenome'];
$quando_aconteceu= $_POST['quando'];
$quanto_tempo= $_POST['tempofora'];
$descricao_alien= $_POST['descricao'];
$fang_visto= $_POST['verFang'];
$email= $_POST['email'];

echo 'Obrigado por enviar o formulário '.$nome_completo.'<br />';
echo 'Você foi abduzido '.$quando_aconteceu;
echo 'e se foir por '.$quanto_tempo.'<br>';
echo 'Descreva eles: '.$descricao_alien. '<br>';
echo 'Fang estava lá ?'.$fang_visto.'<br>';
echo 'Seu email é:'.$email.'<br>';
echo 'Os aliens fizeram: '.$_POST['fizeram'].'<br>';
echo 'Quantos eram? '.$_POST['quantos'].'<br>';
echo "Informações adicionais: ".$_POST['algo'];
?>

</body>
</html>