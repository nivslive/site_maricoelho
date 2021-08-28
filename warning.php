<?php








$erro = "";
$erro2 = "";

$style = "font-weight:bold;color:red;text-align:left;font-size:1.3em;";


if (isset($_POST['submit'])){  //ao clicar no submit


    

     if (!empty($_POST['nome']) && !empty($_POST['email'])){
      
      require_once ("mysql.php"); }


     else
     
     {


      if (empty($_POST['nome']) && !empty($_POST['email'])){

        $erro = "<h6 style=$style>COLOQUE SEU NOME TAMBÉM.</h6>";}
    
    
      else if(empty($_POST['email']) && !empty($_POST['nome'])){
    
            $erro2 =  "<h6 style=$style>COLOQUE SEU EMAIL TAMBÉM.</h6>";
      }

      else if(empty($_POST['email']) && empty($_POST['nome'])){

        $erro = "<h6 style=$style>COLOQUE SEU NOME.</h6>";
        $erro2 =  "<h6 style=$style>COLOQUE SEU EMAIL.</h6>";
      }


     }
         
    }
  

  





        ?>