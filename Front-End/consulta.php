<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Consulta</title>
</head>

<body>
    <div class="container-fluid dashboard h100">
        <div class="row dashboard-dashboard">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xxl-2 pt-4 dashboard-menu-bg dashboard text-center dashboard-shadow">
                <?php require_once('includes/side-bar1.php'); ?>
            </div>
            <div class="h-25  col-sm-10 col-md-10 col-lg-10 col-xxl-10 dashboard-bg">
                <div class="row">
                    <div class="col-9 col-md-10 pt-4 ">
                        <h1 style="color: #707070;" class="my-0">Consulta</h1>
                    </div>
                    <div class="col-3 col-md-2 pt-2" style="text-align:right;">
                        <a href="./"><img src="imagens/dmie.png" alt="" style="width: 100%;max-width:150px;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dashboard">
            <?php require_once('includes/side-bar2.php'); ?>
            <!--right-->
            <div class="dashboard col-md-10 col-lg-10 col-xxl-10 dashboard-bg2 h-100">
                <div class="service container-form pt-2 col-md-12">
                    <div class="dashboard-box">
                        <div class="col-md-12 p-1" style="background-color: #0b277f; color:white; font-size:18px; font-weight:bold">
                            <img src="imagens/details.webp" width="24" height="24">
                            <span>Detalhes</span>
                        </div>
                        <div class="col-md-12 pt-3">
                        <div class="d-md-none d-block col-md-12 px-4">
                            <div class="exibir" style="font-size:14px;">
                                <p class="my-1 d-inline me-4" style="color:#b2b1b6 ;">Exibir <input class="ex-number" type="number" name="exibir" style="max-width:45px;" min="1" max="20"> registros</p>
                                <p class="my-1 d-inline"><a href="#" style="color:#b2b1b6 !important;">Exportar  </a><img src="imagens/export.webp" width="16" height="16"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <form action="">
                                <table class="col-md-12">
                                    <tr>
                                        <td class="px-4 pt-2 pb-2 col-12 col-md-3 d-inline-block">
                                            <label for="cliente" class="col-12"> Cliente
                                                <input type="text" class="col-12 d-block" name="buscar-cliente" placeholder="Selecione o cliente" required>
                                            </label>
                                        </td>
                                        <td class="px-4 pt-2 pb-2 col-12 col-md-3 d-inline-block">
                                            <label for="produto" class="col-12"> Produto
                                                <input type="text" class=" col-12 d-block" name="buscar-produto" placeholder="Selecione o produto" required>
                                            </label>
                                        </td>
                                        <td class="px-4 pt-2 pb-2 col-12 col-md-3 d-inline-block">
                                            <label for="serviço" class="col-12"> Serviço
                                                <input type="text" class="col-12 d-block" name="buscar-serviço" placeholder="Selecione o serviço" required>
                                            </label>
                                        </td>
                                        <td class="px-4 pt-2 pb-2 col-12 col-md-3 d-inline-block">
                                            <label for="serviço" class="col-12">Pesquisar
                                                <input type="text" class="col-12 d-block " name="pesquisar" placeholder="Pesquisar" required>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="d-none d-md-block col-md-12 px-4">
                            <div class="exibir" style="font-size:14px;">
                                <p class="my-1 d-inline me-4" style="color:#b2b1b6 ;">Exibir <input class="ex-number" type="number" name="exibir" style="max-width:45px;" min="1" max="20"> registros</p>
                                <p class="my-1 d-inline"><a href="#" style="color:#b2b1b6 !important;">Exportar  </a><img src="imagens/export.webp" width="16" height="16"></p>
                            </div>
                        </div>
                        <div class="col-mds-12 text-center">
                            <h1>TABELA DE CONSULTA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>