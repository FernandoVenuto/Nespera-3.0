<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="pt-3 d-none d-md-block col-md-2 col-lg-2 col-xxl-2 dashboard-menu-bg sidebar dashboard h-nav">
        <div class="sidebar-sticky dashboard">
            <ul class="nav flex-column dashboard">
                <li class="nav-item dashboard">
                    <span class=" active dashboard">
                        <div style="text-align: left;" class=" nav-link accordion">
                            <div class="menu-style w-100 text-left">
                                <img src="imagens/nav-service.webp" width="24" height="24">
                                <span class="nav-mobile">Serviço</span>
                            </div>
                        </div>
                        <div class="panel">
                            <ul style="list-style-type: none;">
                                <li>
                                    <a href="email-service.php" style="color: black;">E-mail</a>
                                </li>
                                <li>
                                    <a href="wpp-service.php" style="color: black;">WhatsApp</a>
                                </li>
                                <li>
                                    <a href="va-service.php" style="color: black;">Visual Aid</a>
                                </li>
                                <li>
                                    <a href="lp-service.php" style="color: black;">Landing Page</a>
                                </li>
                            </ul>
                        </div>
                    </span>
                </li>
                <li class="nav-item dashboard">
                    <span class=" active dashboard">
                        <div style="text-align: left;" class="nav-link accordion">
                            <div class="menu-style w-100 text-left">
                                <img src="imagens/nav-consult.webp" width="24" height="24">
                                <a href="consulta.php"><span class="nav-mobile">Consulta</span></a>
                            </div>
                        </div>
                        <div class="panel">
                        </div>
                    </span>
                </li>
                <li class="nav-item dashboard">
                    <span class="active dashboard">
                        <div style="text-align: left;" class=" nav-link accordion">
                            <div class="menu-style w-100 text-left">
                                <img src="imagens/nav-config.webp" width="24" height="24">
                                <span class="nav-mobile">Configuração</span>
                            </div>
                        </div>
                        <div class="panel">
                            <ul style="list-style-type: none;">
                                <li>
                                    <a href="pagina-usuario.php" style="color: black;">Usuários</a>
                                </li>
                                <li>
                                    <a href="pagina-cliente.php" style="color: black;">Clientes</a>
                                </li>
                                <li>
                                    <a href="pagina-produto.php" style="color: black;">Produtos</a>
                                </li>
                                <li>
                                    <a href="pagina-servico.php" style="color: black;">Serviços</a>
                                </li>
                            </ul>
                        </div>
                    </span>
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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.esm.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>