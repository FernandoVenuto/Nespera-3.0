<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Nespera-Login</title>
</head>

<body class="login">
    <main class="chome">
        <div class="container">
            <div class="row g-0 d-flex justify-content-md-center align-items-center vh-100">
                <div class="col-12 col-md-7 box text-center">
                    <form action="">
                        <div class="col-md-12">
                            <img class="logo-dmie" src="imagens/data_mining_pb_nome_1400_1000.webp" alt="">
                        </div>
                        <div class="row g-0">
                            <div class="col-3 justify-content-md-center">
                            </div>
                            <div class="col-6 justify-content-md-center mt-3">
                                <div class="justify-content-lg-center">

                                    <input class="col-12 login" type="text" placeholder="Usuário" name="usuario" required>
                                    <input class="col-12 login" type="password" placeholder="Senha" name="senha" required>

                                </div>
                            </div>
                            <div class="col-3 justify-content-md-center">
                            </div>
                        </div>
                        <div class="text">
                            <p>
                                Esqueceu a senha? <strong><a href="recuperar-senha.php">Clique aqui</a></strong>
                            </p>
                        </div>
                        <div>
                            <button id="logar"><span>Login </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>