<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/CSS/estilo.css">
    <css></css>
</link>
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice do Cabeçalho</h2>

    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulo 01 - Basico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                               ola php
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                               Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                               Integração CSS
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
Alunos - <?= date('Y');?>

    </footer>
    
</body>
</html>