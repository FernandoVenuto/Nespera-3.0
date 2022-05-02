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
    <div class="container-fluid dashboard">
        <div class="row dashboard-dashboard">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xxl-2 pt-4 dashboard-menu-bg dashboard text-center dashboard-shadow">
                <img src="imagens/userwhite.png" alt="" class="dashboard">
                <p class="dashboard mt-3" style="color: #8990ad;">Andrew Johnstons</p>
            </div>
            <div class="h-25  col-sm-10 col-md-10 col-lg-10 col-xxl-10 dashboard-bg">
                <div class="row">
                    <div class="col-10 pt-4">
                        <h1 style="color: #707070;" class="my-0">Dashboard</h1>
                    </div>
                    <div class="col-2 pt-2">
                        <img src="imagens/dmie.png" alt="" style="width: 100%;max-width:150px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row dashboard">
            <nav class="pt-3 d-none d-md-block col-md-2 col-lg-2 col- col-xxl-2 dashboard-menu-bg sidebar dashboard">
                <div class="sidebar-sticky dashboard">
                    <ul class="nav flex-column dashboard">
                        <li class="nav-item dashboard">
                            <a class="nav-link active dashboard" href="#">
                            <img src="imagens/nav-service.webp" width="24" height="24">
                                <span class="nav-mobile">Serviços</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="imagens/nav-consult.webp" width="24" height="24">
                                <span class="nav-mobile">Consulta</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="imagens/nav-config.webp" width="24" height="24">
                                <span class="nav-mobile">Configuração</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="imagens/nav-sign-out.webp" width="24" height="24">
                                <span class="nav-mobile">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--right-->
            <div class="dashboard  col-md-10 col-lg-10 col-xxl-10 dashboard-bg2">
                <div class="container dashboard-box mt-3">
                    <div class=" row dashboard">
                        <div class="col-3 d-inline-block">
                            <h3>Visual Aid</h2>
                        </div>
                        <div class="col-3 d-inline-block">
                            <h3>Landing Page</h2>
                        </div>
                        <div class="col-3 d-inline-block">
                            <h3>Email</h2>
                        </div>
                        <div class="col-3 d-inline-block">
                            <h3>WhatsApp</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>