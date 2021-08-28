<?php
// pra esconder o Undefined Index.
// para analisar erros, tire esse código

/**ini_set('display_errors', 0 );
error_reporting(0);**/





date_default_timezone_set('America/Sao_Paulo'); //para alterar o fuso horario





$HOST = 'localhost';
$USER= 'root';
$PASS= '';
$BANCO = 'dadostest';

    $conexao = mysqli_connect($HOST,$USER,$PASS,$BANCO) or die("Erro na conexão com banco de dados " . mysqli_error($conexao));

printf ("System status: %s\n", $conexao->stat());  //pra analisar status do banco.



    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $data = date("y-m-d"); 
    $horario = date("h:m:s");


  $string_sql = "INSERT INTO usuarios(nome,email,data,horario) VALUES ('$nome','$email','$data','$horario')";
  $insert_member_res = mysqli_query($conexao, $string_sql);


  

  

   

   if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
    require ("sucesso.php"); //Apenas um link para retornar para o formulário de cadastro
   }   
   else {
    require ("fracasso.php");  
   }






   mysqli_close($conexao); //fecha conexão com banco de dados






?>