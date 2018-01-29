<?php
 $db= mysqli_connect('localhost', 'root', '1234', 'exercicios') or die("Não deu boa");
 $nome= $_POST["nome"];
 $sobrenome= $_POST["sobrenome"];
 $email= $_POST["email"];
 $query= "INSERT INTO elvis (nome, sobrenome, email) VALUES ('$nome','$sobrenome','$email');";
 $query= mysqli_query($db, $query);
 mysqli_close($db);