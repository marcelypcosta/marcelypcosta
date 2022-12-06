<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/entrar.css">
    <title>Entrar - Spotyfree</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Spotyfree</h1>
    </header>
    <main class="caixa">
        <div class="recado">
            <h2>Inicie sua sessão no Spotyfree.</h2>
        </div>
        <form action="" method="POST">
            
            <label class="pergunta" for="email">Endereço de e-mail ou nome do utilizador</label>
            <input required class="input_padrao" type="email" name="email" id="email" placeholder="Digite seu e-mail ou nome">

            <label class="pergunta" for="senha">Digite sua senha</label>
            <input required class="input_padrao" type="password" name="senha" id="senha" placeholder="Digite sua senha">

            <fieldset class="botao">
                    <input type="submit" value="Entrar" class="entrar">
            </fieldset>

            <p class="tenhoConta">Não possui conta? <a href="cadastre-se.php" class="tenhoConta_link">Cadastre-se</a></p>
            
        </form>
    </main>
</body>
</html>