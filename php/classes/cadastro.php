
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="rpg,RPG,rpg de mesa">
    <meta name="author" content="Batato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="img/cachorro.svg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.html">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <form action="cadastrar.php" method="POST">
                        <label for="firstname">Nome de Login</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu Nome de Login" required>
                    </div>

                            <div class="input-box">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" placeholder="Digite seu Email" required>
                            </div>

                            <div class="input-box">
                                <label for="password">Senha</label>
                                <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                            </div>

                            <div class="input-box">
                                <label for="confirmpassword">Senha</label>
                                <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirme sua senha" required>
                            </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-titles">
                        <h6>Genero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>
                        
                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="others" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                
                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>