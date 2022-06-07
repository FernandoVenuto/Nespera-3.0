<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid dashboard h100">
        <div class="row dashboard-dashboard">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xxl-2 pt-4 dashboard-menu-bg dashboard text-center dashboard-shadow">
               <?php require_once('includes/side-bar1.php');?>
            </div>
            <div class="h-25  col-sm-10 col-md-10 col-lg-10 col-xxl-10 dashboard-bg">
                <div class="row">
                    <div class="col-9 col-md-10 pt-4">
                        <h1 style="color: #707070;" class="my-0">Dashboard</h1>
                    </div>
                    <div class="col-3 col-md-2 pt-2" style="text-align:right;">
                        <img src="imagens/dmie.png" alt="" style="width: 100%;max-width:150px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row dashboard">
           <?php require_once('includes/side-bar2.php'); ?>
            <!--right-->
            <div class="dashboard w3-animate-zoom  col-md-10 col-lg-10 col-xxl-10 dashboard-bg2 h-100">
                <!--Box 1-->
                <div class=" dashboard-box mt-3">
                    <div class=" row dashboard">
                        <div class="col-sm-3 col-6 ps-4 d-inline-block">
                            <h3 class="border-h3">Visual Aid</h3>
                        </div>
                        <div class="col-sm-3 col-6 d-inline-block">
                            <h3 class="border-h3">Landing Page</h3>
                        </div>
                        <div class="col-sm-3 col-6 ps-4 ps-md-3 d-inline-block">
                            <h3 class="border-h3">Email</h3>
                        </div>
                        <div class="col-sm-3 col-6 d-inline-block">
                            <h3>WhatsApp</h3>
                        </div>
                    </div>
                </div>
                <!--Box 2-->
                <div class=" dashboard-box2 mt-5 d-flex h-100">
                    <div class="col-12 row dashboard align-items-end">
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Janeiro</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Fevereiro</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Março</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Abril</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Maio</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Junho</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Julho</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Agosto</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Setembro</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Outubro</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Novembro</h4>
                        </div>
                        <div class="col-6 col-md-1 p-1">
                            Aqui vão os graficos
                            <h4>Dezembro</h4>
                        </div>
                    </div>
                </div>
                <!--Box 3-->
                <div class=" dashboard-box3 mt-5 h-100">
                    <div class="row dashboard3">
                        <div class="col-6 col-md-2 d-inline-block text-center">
                            <h6>Brasil</h6>
                            Aqui vão os numeros

                        </div>
                        <div class="col-6 col-md-2 d-inline-block text-center">
                            <h6>Chile</h6>
                            Aqui vão os numeros
                        </div>
                        <div class="col-6 col-md-2 d-inline-block text-center">
                            <h6>Colômbia</h6>
                            Aqui vão os numeros
                        </div>
                        <div class="col-6 col-md-2 d-inline-block text-center">
                            <h6>Ecuador</h6>
                            Aqui vão os numeros
                        </div>
                        <div class="col-6 col-md-2 d-inline-block text-center">
                            <h6>Central America</h6>
                            Aqui vão os numeros
                        </div>
                        <div class="col-6 col-md-2 d-inline-block text-center">
                            <h6>Mexico</h6>
                            Aqui vão os numeros
                        </div>

                    </div>
                </div>
                <!--Box 4-->
                <div class=" dashboard-box4 mt-5 h-100">
                    <div class=" row dashboard4 pt-3">
                        <div class="col-6 col-md-3 d-inline-block">
                            <div class="pG-box col-12">
                                <div style="background-color: #881798; color:#881798;">
                                    <img src="imagens/header-block.PNG" style="max-width: 300px; width:100%">
                                </div>
                                <div style="background-color: #f6f6f6;text-align:center; ">
                                    P&G - NEUROBION
                                    <p style="padding: 0px 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit adipisci, quia molestiae optio, excepturi, eos assumenda aperiam ducimus at magni voluptate voluptatibus nesciunt eius exercitationem fuga a debitis? Inventore, modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus magnam, voluptatem asperiores alias quas cum dicta itaque reprehenderit ipsum eius amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 d-inline-block">
                            <div class="pg-box2 col-12">
                                <div style="background-color: #4f6bed; color:#4f6bed;">
                                    <img src="imagens/header-block2.PNG" style="max-width: 300px; width:100%">
                                </div>
                                <div style="background-color: #f6f6f6; text-align:center;">P&G - CONTROLE
                                    <p style="padding: 0px 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit adipisci, quia molestiae optio, excepturi, eos assumenda aperiam ducimus at magni voluptate voluptatibus nesciunt eius exercitationem fuga a debitis? Inventore, modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus magnam, voluptatem asperiores alias quas cum dicta itaque reprehenderit ipsum eius amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 d-inline-block">
                            <div class="takeda-box col-12">
                                <div style="background-color: #69797e; color:#69797e;">
                                    <img src="imagens/header-block3.PNG" style="max-width: 300px; width:100%">
                                </div>
                                <div style="background-color: #f6f6f6;text-align:center;">TAKEDA
                                    <p style="padding: 0px 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit adipisci, quia molestiae optio, excepturi, eos assumenda aperiam ducimus at magni voluptate voluptatibus nesciunt eius exercitationem fuga a debitis? Inventore, modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus magnam, voluptatem asperiores alias quas cum dicta itaque reprehenderit ipsum eius amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 d-inline-block">
                            <div class="clube-naos-box col-12">
                                <div style="background-color: #498205; color:#498205;">
                                    <img src="imagens/header-block4.PNG" style="max-width: 300px; width:100%">
                                </div>
                                <div style="background-color: #f6f6f6;text-align:center; ">CLUBE NAOS
                                    <p style="padding: 0px 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit adipisci, quia molestiae optio, excepturi, eos assumenda aperiam ducimus at magni voluptate voluptatibus nesciunt eius exercitationem fuga a debitis? Inventore, modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus magnam, voluptatem asperiores alias quas cum dicta itaque reprehenderit ipsum eius amet unde </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>