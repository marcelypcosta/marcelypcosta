<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/cadastre-se.css">
    <title>Cadastre-se - Spotyfree</title>
</head>
<body>
    <div class="caixa">
            <h1>Spotyfree</h1>
            <div class="recado">
                <h2>Regista-te gratuitamente para começares a ouvir.</h2>
            </div>
        <form action="" method="POST">
            
            <label class="pergunta" for="email">Qual o seu e-mail?</label>
            <input required class="input_padrao" type="email" name="Email" id="email" placeholder="seuemail@dominio.com">

            <label class="pergunta" for="senha">Crie sua senha</label>
            <input required class="input_padrao" type="password" name="Senha" id="senha" placeholder="Crie sua senha">

            <label class="pergunta" for="nome_perfil">Como queres que te chamemos?</label>
            <input required class="input_padrao" type="text" name="Senha" id="senha" placeholder="Crie seu nome de perfil">

            <label class="pergunta" for="data">Qual é a data do seu aniversário?</label>
            <input required class="input_padrao" type="date" name="Data do Aniversário" id="data">

            <label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades pro email?</label>        
            
            
            <fieldset class="botao">
                    <input type="submit" value="Cadastrar" class="enviar">
            </fieldset>

            <p>Já possui conta? <a href="entrar.php" class="tenhoConta_link">Iniciar sessão</a></p>
        </form>
    </div>
</body>
</html>