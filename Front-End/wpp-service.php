<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>WP-Service</title>
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
                        <h1 style="color: #707070;" class="my-0">Serviço</h1>
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
                            <img src="imagens/wp-service.webp" width="25" height="25">
                            <span>WhatsApp</span>
                        </div>
                        <div class="col-md-12 pt-5 w3-animate-zoom">
                            <form action="">
                                <table class="col-md-12">
                                    <tr>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="cliente" class="col-12  "> Cliente <span style="color: red">*</span>
                                                <select class="col-12  col-md-10 d-block" name="cliente" required>
                                                    <option value="">Insira o nome do cliente</option>
                                            </label>
                                        </td>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="produto" class="col-12 "> Produto <span style="color: red">*</span>
                                                <select class="col-12  col-md-10 d-block" name="produto" required>
                                                    <option value="">Insira o produto</option>
                                            </label>
                                        </td>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="serviço" class="col-12  "> Serviço <span style="color: red">*</span>
                                                <select class="col-12  col-md-10 d-block" name="serviço" required>
                                                    <option value="">Selecione o serviço</option>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="codigo" class="col-12 "> Código <span style="color: red">*</span>
                                                <input type="text" class="col-12  col-md-10 d-block" name="codigo" placeholder="Código do PGI" required>
                                            </label>
                                        </td>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="nome" class="col-12 "> Nome <span style="color: red">*</span>
                                                <input type="text" class="col-12  col-md-10 d-block" name="nome" placeholder="Nome do Email" required>
                                            </label>
                                        </td>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="data-de-recebimento" class="col-12 "> Data de Recebimento <span style="color: red">*</span>
                                                <input type="date" class="col-12  col-md-10 d-block" name="data-de-recebimento" required>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="categoria" class="col-12 "> Categoria <span style="color: red">*</span>
                                                <input type="text" class="col-12  col-md-10 d-block" name="categoria" placeholder="Insira a categoria" required>
                                            </label>
                                        </td>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="pais" class="col-12 "> País <span style="color: red">*</span>
                                                <input type="text" class="col-12  col-md-10 d-block" name="pais" placeholder="Insira o país" required>
                                            </label>
                                        </td>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="conteudo" class="col-12 "> Conteúdo <span style="color: red">*</span>
                                                <input type="text" class="col-12  col-md-10 d-block" name="conteudo" placeholder="Insira o conteúdo" required>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="campanha" class="col-12 "> Campanha <span style="color: red">*</span>
                                                <input type="text" class="col-12 col-md-10 d-block" name="campanha" placeholder="Insira a campanha" required>
                                            </label>
                                        </td>
                                        <td class=" col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="qntd-botoes" class="col-12 ">Quantidade de Botões <span style="color: red">*</span>
                                                <input type="text" class="col-12  d-block col-md-10" name="qntd-botoes" placeholder="Insira a quantidade de botões" required>
                                            </label>
                                        </td>
                                        <td class=" col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="f-arquivo" class="col-12"> Formato do arquivo <span style="color: red">*</span>
                                                <input type="text" class="col-12 col-12  col-md-10 d-block" name="f-arquivo" placeholder="Insira o formato do arquivo" required>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-12 col-md-4 p-4 pt-2 d-inline-block">
                                            <label for="link-mat" class="col-12 ">Link do Material <span style="color: red">*</span>
                                                <input type="text" class="col-12 col-md-10 d-block" name="link-mat" placeholder="Insira o formato do arquivo" required>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                                <table class="col-12">
                                    <tr>
                                        <td class="p-4 pt-2 col-12">
                                            <input style="padding-bottom: 80px;background-color: rgb(211,211,211, 0.3)" type="text" class="col-md-12 d-block input-obs" name="observaçoes" placeholder="Observações">
                                        </td>
                                    </tr>
                                </table>
                                <table class="col-12 offset-md-8 offset-lg-9 offset-xxl-10 col-xxl-2 table-button">
                                    <tr>
                                        <td>
                                            <button class="button-env"><span>Enviar </span></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>