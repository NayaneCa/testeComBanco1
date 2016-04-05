       <?php
       //$nome = $_GET['nome'];
       //$telefone=$_GET['telefone'];
       //$email=$_GET['email'];
       
       $nome = $_POST['nome'];
       $telefone=$_POST['telefone'];
       $email=$_POST['email'];
       
       $conexao = mysql_connect('localhost','root','');
       
       mysql_select_db('testecombanco',$conexao);
       
       $sql = "insert into contatos (nome,telefone,email) values ('$nome','$telefone','$email')";
       
       $resultado = mysql_query($sql) or die ("Erro: " . mysql_error());
       
       if($resultado){
       echo "ok";}
       else {
       echo "0";}
       ?>

