<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos</title>
    <style>
        a#salvar {
            text-decoration: none !important;
            color: white !important;
            font-weight: bold !important;
        }
    </style>
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
                        <h1 style="color: #707070;" class="my-0">Produto</h1>
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
                            <img src="imagens/edit-user.webp" width="25" height="25">
                            <span>Cadastro</span>
                        </div>
                        <div class="col-md-12 d-none d-lg-block">
                            <form action="">
                                <div class="p-xxl-4 p-lg-2">
                                    <div class="row g-0" style="border:1px solid #c5c9d7;">
                                        <div class="col-xxl-11 col-lg-10">
                                            <div class="col-md-12 pt-5">

                                                <table class="col-md-12">
                                                    <tr>
                                                        <td class="col-12 col-xxl-4 col-md-6 p-4 pt-2 d-inline-block">
                                                            <label for="client-name" class="col-12  "> Nome <span style="color: red">*</span>
                                                                <input type="text" class="col-12  col-md-10 d-block" placeholder="nome do cliente" name="client-name" required>
                                                            </label>
                                                        </td>
                                                        <td class="col-12 col-xxl-4 col-md-6 p-4 pt-2 d-inline-block">
                                                            <label for="agencia" class="col-12 "> Agência <span style="color: red">*</span>
                                                                <input type="text" class="col-12  col-md-10 d-block" name="agencia" placeholder="nome da agência" required>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="col-xxl-12 col-lg-12 text-center">
                                                <div class="col-md-12 pt-5">
                                                    <div class="pt-2 col-12">
                                                        <h1 style="margin:0px; font-size:18px;">TABELA DE PRODUTOS</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="col-11 d-flex flex-row-reverse">
                                            <tr>
                                                <td>
                                                    <a href="#"><button type="submit" id="salvar" class="button-env4" style="color:white!important;"><span id="salvar">Salvar</span></button></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>