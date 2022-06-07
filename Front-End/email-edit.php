<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Email-Service</title>
    <style>
        span#edit-color {
            color: #b4b3b8 !important;
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
                    <div class="col-9 col-md-10 pt-4">
                        <h1 style="color: #707070;" class="my-0">Serviço</h1>
                    </div>
                    <div class="col-3 col-md-2 pt-2" style="text-align: right;">
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
                            <img src="imagens/email-service.webp" width="25" height="25">
                            <span>Email</span>
                        </div>
                        <div class="row g-0">
                            <div class=" col-12 col-md-9 pt-4">
                                <table class="col-md-8 col-lg-6">
                                    <tr>
                                        <td class="px-3 col-2 col-md-1 span-color">
                                            <p style="margin:0px;">ID</p>
                                            <span id="edit-color">01</span>
                                        </td>
                                        <td class="pe-3 col-4 col-md-1">
                                            <p style="margin:0px;">Data</p>
                                            <span id="edit-color">28/04/2022</span>
                                        </td>
                                        <td class="pe-3 col-4 col-md-5 col-lg-5">
                                            <p style="margin:0px;">Código</p>
                                            <span id="edit-color">EC-PGI-0047-22</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 pt-3 col-2 col-md-1 span-color">
                                            <p style="margin:0px;">País</p>
                                            <span id="edit-color">Ecuador</span>
                                        </td>
                                        <td class="pe-3 pt-3 col-4 col-md-1">
                                            <p style="margin:0px;">Produto</p>
                                            <span id="edit-color">P&G Health</span>
                                        </td>
                                        <td class="pe-3 pt-3 col-4 col-md-5 col-lg-5">
                                            <p style="margin:0px;">Categoria</p>
                                            <span id="edit-color">Estudo pesquisa</span>
                                        </td>
                                    </tr>
                                </table>
                                <table class="col-md-8 col-lg-12">
                                    <tr>
                                        <td class=" px-3 col-12">
                                            <p style="margin:0px;" class=" pt-3"> Nome do Email</p>
                                            <span id="edit-color">Diagrama Anatômico para Diagnóstico de Neuropatia Periférica</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 col-12">
                                            <p style="margin:0px;" class="pt-3">Assunto</p>
                                            <span id="edit-color">Diagrama Anatômico para Diagnóstico de Neuropatia Periférica</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 col-12">
                                            <p style="margin:0px;" class="pt-3">Link Botão</p>
                                            <span id="edit-color">https://content.pghealthnews.com/eap/ec/EC-PGI-0047-22</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 col-12">
                                            <p style="margin:0px;" class="pt-3">Nome do arquivo</p>
                                            <span id="edit-color">EC-PGI-0047-diagrama-anatomico-para-diagnostico-de-neuropatia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3 col-12">
                                            <p style="margin:0px;" class="pt-3">Nome da Imagem</p>
                                            <span id="edit-color">EC-PGI-0047-22.jpg</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3 col-12">
                                            <p style="margin:0px;" class="pt-3">Link da Imagem</p>
                                            <span id="edit-color">https://dmiepublic.blob.core.windowns.net/peg/imagens/EC-PGI-0047-22.jpg</span>
                                        </td>
                                    </tr>
                                </table>
                                <table class="col-md-8 col-lg-3">
                                    <tr>
                                        <td class="px-3  pt-3 col-2 col-md-1 span-color">
                                            <p style="margin:0px;">ID Veeva V1</p>
                                            <span id="edit-color">000001</span>
                                        </td>
                                        <td class="pe-3 pt-3 col-4 col-md-1">
                                            <p style="margin:0px;">ID Veeva V2</p>
                                            <span id="edit-color">000002</span>
                                        </td>
                                    </tr>
                                </table>
                                <table class="col-md-8 col-lg-12">
                                    <tr>
                                        <td class=" px-3 col-12">
                                            <p style="margin:0px;" class=" pt-3">Materiais</p>
                                            <span id="edit-color">https://dmiecombr.sharepoint.com/f/s/PG-LATAM/SharePoint</span>
                                        </td>
                                    </tr>
                                </table>
                                <div class="row g-0">
                                    <div class="px-3 col-7 pt-3">
                                        <input type="text" placeholder="Observações" class="p-3 col-md-12" style="background-color:#f6f6f6;">
                                    </div>
                                    <div class="col-1-img pt-5">
                                        <img src="imagens/del.webp" alt="" width="30" height="30" style="cursor:pointer;">
                                    </div>
                                    <div class="col-1-img pt-5">
                                        <img src="imagens/edit.webp" alt="" width="30" height="30" style="cursor:pointer;">
                                    </div>
                                    <div class="col-1-img pt-5">
                                        <img src="imagens/save.webp" alt="" width="30" height="30" style="cursor:pointer;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pt-4 text-center">
                                <h1>IMAGEM</h1>
                            </div>
                        </div>
                        <div class="row g-0">
                            <table class="col-12 offset-md-8 offset-lg-9 offset-xxl-10 col-xxl-2 ">
                                <tr>
                                    <td>
                                        <button onclick="history.back()" id="edit" class="button-env2" style="color:white!important;"><span id="edit"> Voltar</span></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>