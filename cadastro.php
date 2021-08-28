


<!----------------------------------->
<!---------INTEGRAÇÃO MYSQL---------->
<?php require ("warning.php"); ?>
<!----------------------------------->
<!----------------------------------->

<!doctype html>
<html lang="pt-br">

<head>
    <title>Make me a Diva - Agustin Fernandez</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/style.css" rel="stylesheet">

</head>


<body class="banner">







    <main class="container my-3 gold p-lg-2 d-flex justify-content-center">
        <div id="parcelas" class="row  col-md-8 d-flex justify-content-between">
            <div  class="row text-center d-flex justify-content-center col-3">

                <div class="col-12 text-center">
                    <h1></h1>
                </div>
                <div class="col-12">
                    <h3>Dias</h3>
                </div>
            </div>

            <div  class="row text-center d-flex justify-content-center col-3">

                <div class="col-12 text-center">
                    <h1></h1>
                </div>
                <div class="col-12">
                    <h3>Horas</h3>
                </div>
            </div>
            <div  class="row text-center d-flex justify-content-center col-3">

                <div class="col-12 text-center">
                    <h1></h1>
                </div>
                <div class="col-12">
                    <h3>Minutos</h3>
                </div>
            </div>
            <div  class="row  text-center d-flex justify-content-center col-3">

                <div class="col-12 text-center">
                    <h1></h1>
                </div>
                <div class="col-12">
                    <h3>Segundos</h3>
                </div>
            </div>
            



        </div>









    </main>


    <section class="container-fluid animate-blur  text-center p-lg-5  d-flex align-items-center justify-content-center">
        <div class="row col-12 col-md-11 col-lg-10 col-sm-11 d-flex justify-content-md-between 
        justify-content-center ">
            <div class="row d-flex col-md-6 col-12 justify-content-between">
                <div class="col-12 p-md-5"> <img width="65%" src="images/logo.png">
                </div>
                <div class="col-12">
                    <h1>Evento 100%</h1><h1 class="bold">Online e Gratuíto</h1>
                </div>
            </div>



            <div class="row d-flex col-md-6  col-12 p-md-5 align-items-center justify-content-between">

                <form method="POST" class="col-12">
                    <div class="col-12 form p-md-5">
                        <div class="form-group row ">
                            <label for="inputEmail3" class="col-md-2 col-form-label">Nome</label>
                            <div class="col-md-10">
                         
                                <input type="name" name="nome" class="form-control" id="nome" placeholder="">
                                <?php echo $erro; ?>
                            
                            
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                
                           
                                <input type="email" name="email" class="form-control" id="email" placeholder="">
                                <?php echo $erro2; ?>
                            
                            </div>
                        </div>

                        <div class="form-group row ">
                         
                            <div class="col-sm-12  text-center">
                                <div><input class="btn btn-primario" value="Cadastrar" type="submit" name="submit"></input></div>
                            </div>
                        </div>
           
                </form>
            </div>


        </div>
        </div>



    </section>





    <footer class="container-fluid fixed-bottom text-center" style="background-color:#302d05;">Inoveight Solutions. Todos os direitos reservados. </footer>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/timer.js"></script>
</body>

</html>