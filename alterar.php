        <?php
        $nomenovo = $_GET['nomenovo'];
        $telefone = $_GET['telefone'];
        $email=$_GET['email'];
        
        $conexao = mysql_connect('localhost','root','');
        
        mysql_select_db('testecombanco',$conexao);
        
        $sql = "update contatos set nome='$nomenovo',telefone='$telefone',email='$email' where nome='$nomevelho'";
        
        $resultado = mysql_query($sql) or die ("Erro .:" . mysql_error());
        
        if($resultado){
            echo "ok";
        }
        else{
            echo "0";
        }
        ?>
