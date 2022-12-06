<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="assets/imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/pg-entrada.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <title>Músicas - Spotyfree</title>
</head>
<body>
    <header class="cabecalho">
        <input type="search" name="Buscar" placeholder="Buscar" class="search_cabecalho">
        <p class="perfil_cabecalho"><?php echo $_SESSION['nome'];?></p>
    </header>
    <nav class="menu-lateral">
        <h1 class="logo_pagina">Spotyfree</h1>
        <a href="#" class="menu-lateral_link menu-lateral_musica menu-lateral_link--ativo">Músicas</a>
        <a href="#" class="menu-lateral_link menu-lateral_radios">Rádios</a>
        <a href="#" class="menu-lateral_link menu-lateral_explorar">Explorar</a>
        <a href="#" class="menu-lateral_link menu-lateral_favoritos">Playlists</a>
        <a href="logout.php" class="logout">Sair</a>
    </nav>
    <main>
        <div class="spotify-playlists">
            <h2>Spotify Playlists</h2>
            <div class="list">
                <div class="item">
                    <img src="assets/imagens/capa-musica-1.webp" alt="Imagem da Playlists">
                    <h4>Top R&B</h4>
                </div>
                <div class="item">
                    <img src="assets/imagens/capa-musica-2.webp" alt="Imagem da Playlists">
                    <h4>Top Pagode</h4>
                </div>
                <div class="item">
                    <img src="assets/imagens/capa-musica-3.webp" alt="Imagem da Playlists">
                    <h4>Top Sertanejo</h4>
                </div>
                <div class="item">
                    <img src="assets/imagens/capa-musica-4.webp" alt="Imagem da Playlists">
                    <h4>Top Brasil</h4>
                </div>
            </div>
        </div>
        <h2>Músicas disponíveis</h2>
        <ul class="lista-musicas">
            <li>
                <img src="assets/imagens/play.png" alt="play" id="icon-1">
                <div>
                    <p class="p1">Leilão</p>
                    <p>Gloria Groove</p>
                    <audio id="musica-1" src="assets/music/GloriaGroove-leilao-gloria-groove-22bb1659.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-fav.png" alt="favoritar" id="icon-fav">
            </li>
            <li>
                <img src="assets/imagens/play.png" alt="play" id="icon-2">
                <div>
                    <p class="p1">Completa aí</p>
                    <p>Henrique e Juliano feat. Marília Mendonça</p>
                    <audio id="musica-2" src="assets/music/henriqueejulianooficial-completa-ai-part-marilia-mendonca-09f511dd.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-nao-fav.png" alt="favoritar">
            </li>
            <li>
                <img src="assets/imagens/play.png" alt="play" id="icon-3">
                <div>
                    <p class="p1">Amor e Fé</p>
                    <p>Hungria</p>
                    <audio id="musica-3" src="assets/music/hungriahiphop-amor-e-fe-a4c807bb.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-fav.png" alt="favoritar" >
            </li>
            <li>
                <img src="assets/imagens/play.png" alt="play" id="icon-4">
                <div>
                    <p class="p1">Amando Você</p>
                    <p>João Gomes</p>
                    <audio id="musica-4" src="assets/music/joaogomescantor-amando-voce-8b8be3f5.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-nao-fav.png" alt="favoritar">
            </li>
            <li> 
                <img src="assets/imagens/play.png" alt="play" id="icon-5">
                <div>
                    <p class="p1">Frieza</p>
                    <p>Murilo Huff feat. Marília Mendonça</p>
                    <audio id="musica-5" src="assets/music/murilohuff-frieza-part-marilia-mendonca-54dcb39c.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-fav.png" alt="favoritar" >
            </li>
            <li>
                <img src="assets/imagens/play.png" alt="play" id="icon-6">
                <div>
                    <p class="p1">Tem Cabaré essa Noite</p>
                    <p>Nivaldo Marques</p>
                    <audio id="musica-6" src="assets/music/nivaldomarques-tem-cabare-essa-noite-5b88a3df.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-nao-fav.png" alt="favoritar" >
            </li>
            <li> 
                <img src="assets/imagens/play.png" alt="play" id="icon-7">
                <div>
                    <p class="p1">Galera do Interior</p>
                    <p>Barões da Pisadinha</p>
                    <audio id="musica-7" src="assets/music/osbaroesdapisadinha-baroes-da-pisadinha-galera-do-interior-dfbc6061.mp3"></audio>
                </div>
                <img src="assets/imagens/favorito-fav.png" alt="favoritar">
            </li>
        </ul>
    </main>
    <script src="assets/index.js"></script>
</body>
</html>