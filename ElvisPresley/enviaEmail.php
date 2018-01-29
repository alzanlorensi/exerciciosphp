<?php
 $db= mysqli_connect('localhost', 'root', '1234', 'exercicios') or die("Não deu boa");
 $assunto= $_POST["assunto"];
 $mensagem= $_POST["mensagem"];
 $query= "SELECT * from elvis;";
 $result= mysqli_query($db, $query);
 while ($row= mysqli_fetch_array($result)){
     echo $row['nome'].' '.$row['sobrenome'].' '.$row['email'].'<br>';
 }
 
 mysqli_close($db);