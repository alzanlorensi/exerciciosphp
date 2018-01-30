<?php
 if(isset($_POST['Enviar'])){
 $assunto= $_POST["assunto"];
 $mensagem= $_POST["mensagem"];
 $output_form= false;
 if (empty($mensagem) or empty($assunto)){
     echo "Você Esqueceu de alguns campos";
     $output_form= true;
 } else {
     $db= mysqli_connect('localhost', 'root', '1234', 'exercicios') or die("Não deu boa");
     $query= "SELECT * from elvis;";
    $result= mysqli_query($db, $query);
    echo "Email enviado com sucesso";
    mysqli_close($db);
}
 } else {
    $output_form=true;
}
if ($output_form){
    ?>
<html><form method="POST" actio="<?php echo $_SERVER['PHP_SELF'];?>" >
            <table border="0" cellspacing="1" align="center">
                <tbody>
                    <tr>
                        <td id="label">Assunto:</td>
                        <td><input type="text" name="assunto" size="46"/></td>
                    </tr>
                    <tr>
                        <td id="label"> Mensagem:</td>
                        <td><textarea name="mensagem" style="width: 300px; height: 210px;" placeholder="Digite a mensagem aqui."></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" ><input type="submit" value="Enviar" id="button"/></td>
                    </tr>
                </tbody>
            </table>
            <div> <img src="../img/elvisPNG.png" width="359" height="392" alt="elvisPNG" align="right"/>
            </div>
            
            
       </form></html>
<?php
}
 ?>