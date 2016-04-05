        <?php
         //$nome =$_GET['nome'];
         
         $nome =$_POST['nome'];
         
         $conexao = mysql_connect('localhost','root','');
         
         mysql_select_db('testecombanco',$conexao);
         
         $sql="select * from contatos where nome like '$nome'";
         
         $resultado = mysql_query($sql) or die ("Erro: ". mysql_error());
         
         // Obtém o resultado de uma linha como um objeto
         while($linha = mysql_fetch_object($resultado)){
             echo $linha ->nome."#";
             echo $linha ->telefone."#"; 
             echo $linha ->email."#"; 
                         
         }
         echo "^";
        ?>
