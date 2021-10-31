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
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                               Comentarios php
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio1">
                               Desafio
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="modulos">
                <div class="modulo vermelho">
                    <h3>Modulo 02 - tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                               Tipos Inteiros
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                               tipos flutuantes
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritimetica">
                               aritimetica
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio02">
                               Desafio_procedencia
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                               Tipo string
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                               Desafio Srting
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                               Boleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversao">
                               conversao
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Modulo 03 - variaveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                               variaveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio1">
                               Desafio Variaveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicao">
                               atribuição
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