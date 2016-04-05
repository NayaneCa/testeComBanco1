        <?php
        $conexao = mysql_connect('localhost','root','');
        mysql_select_db('testecombanco',$conexao);
        $sql="select * from contatos";
        $resultado=  mysql_query($sql) or die ("Erro: ". mysql_error());
        while($linha = mysql_fetch_object($resultado))
                echo $linha->nome."#";
        echo "^";
        ?>
