<?php require_once('api.php');?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova-front-LucasNascimento</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div>
        <img class="col-md-12 col-sm-12 col-xs-12" src="img/banner.jpg" alt="banner">
    </div>


    <div class="col-md-12 textos">
            <p id="p1" class="text-center col-md-12 ">
                Já falamos aqui sobre como ouvir música em inglês<br>
                pode ajudar você nos seus estudos do idioma.
            </p>

            <p id="p2" class="text-center col-md-12 col-sm-12 col-xs-12">
                Hoje algumas sugestões que não só fazem paticar um pouco o inglês<br>
                mas também tomar as suas viagens muito mais divertidas
            </p>

            <p id="p3" class=" text-center font-weight-bold titulo-principal">
                APERTE O CINTO E PREPARE A PLAYLIST
            </p>

        
    </div>
    
    
    <section class="middle">
        <div class="jumbotron">

        <div class="car">
            <img class="img-car" src="img/car.jpg" alt="car">
        </div>

        <div class="container col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 text-right font-weight-bold">
                        <p style="font-size: 2em; color: #7b7b7b; line-height: 1.0;" >
                            Para quem está<br>
                            em uma road trip!
                        </p>
                    </div>

                    <div class="col-md-6 text-left">
                        <p class="style="color: #4e4e4e;"">
                            Músicas perfeitas para aquela viagem de<br> carro com os amigos, em que o destino<br> não é lá o mais importante.
                        </p>
                        
                        <p class="font-weight-bold" style="font-size: 2em; color: #b7acaa;">
                            Let's go get lost!
                        </p>
                    </div>
            </div>       
        </div>


        <div class="row">
            <div class="col-md-3 "></div>
            <div class="col-md-2 col-sm-4 ">
                <a class="f1" href="<?php echo $result[0]->url ?>" target="_blank">
                    <img class="img-singer" src="<?php echo $result[0]->pic_medium ?>" alt="">

                    <div class="img-mask">
                        <img class="play" src="img/play.png" alt="">
                    </div>

                    <div class="name-singer font-weight-bold text-center" id="name-singer1">
                        <p>Bruno Mars</p>
                    </div>
                </a>
                
            </div>
            
            <div class="col-md-2 col-sm-4">
                <a class="f3" href="<?php echo $result[1]->url ?>" target="_blank">
                    <img class="img-singer" src="<?php echo $result[1]->pic_medium ?>" alt="">

                    <div class="img-mask">
                        <img class="play" src="img/play.png" alt="">
                    </div>

                     <div class="name-singer font-weight-bold text-center" id="name-singer2">
                        <p>Jorge e Mateus</p>
                    </div>
                </a>

            </div>
                        
            <div class="col-md-2 col-sm-4">
                <a class="f2" href="<?php echo $result[2]->url ?>" target="_blank">
                    <img class="img-singer" src="<?php echo $result[2]->pic_medium ?>" alt="">

                    <div class="img-mask">
                        <img class="play" src="img/play.png" alt="">
                    </div>

                     <div class="name-singer font-weight-bold text-center" id="name-singer3">
                        <p>Adele</p>
                    </div>
                </a>

            </div>
            <div class="col-md-3"></div>

        </div> 
        </div> 
        <footer>
            <div class="text-center">Prova frontEnd Lucas Nascimento</div>
        </footer>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>