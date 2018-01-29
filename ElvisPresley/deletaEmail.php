<html>
     <head>
        <title>Remover Email</title>
        <link rel="shortcut icon" href="../img/iconElvis.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body bgcolor="#CCC">
        <div style="font-family: Myriad Pro Light; font-size:x-large; text-align: center">Receba emails sobre nossas novidades.</div>
        <form method="POST" action="" >
            <table border="0" cellspacing="1" align="center">
                <tbody>
                    <tr>
                        <td id="label">Primeiro nome:</td>
                        <td><input type="text" name="nome" class="campo"/></td>
                    </tr>
                    <tr>
                        <td id="label"> Sobrenome:</td>
                        <td><input type="text" name="sobrenome" class="campo"/></td>
                    </tr>
                    <tr>
                        <td id="label" >Email:</td>
                        <td><input type="text" name="email" class="campo"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Remover" id="button" /></td>
                    </tr>
                </tbody>
            </table>
            <div> <img src="../img/elvisPNG.png" width="359" height="392" alt="elvisPNG" align="right"/>
            </div>
            
            
        </form>
    </body>
</html>


<?php
$db= mysqli_connect('localhost', 'root', '1234', 'exercicios') or die("Não deu boa");
$email= $_POST['email'];
$query= ("DELETE from elvis WHERE email='$email' ");
$result= mysqli_query($db, $query);
mysqli_close($db);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

