        <?php
        $conexao = mysql_connect('localhost','root','');
        
        mysql_select_db('testecombanco',$conexao);
        
        $sql="select * from contatos";
        
        $resultado = mysql_query($sql) or die ("Erro .:" . mysql_error());
        
        if (mysql_num_rows($resultado) > 0) {
            echo "ok";
        } else {
            echo "0";
        }
        ?>