<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Animes BR</title>
</head>

<body>
    <main>

        <section id="pagina-home">
            <header>
                <img src="img/logo.png" alt="logo">
                <nav class="menu-principal">
                    <ul>
                        <li><a href="mailto: erickviniciusgusson@gmail.com" class="link-ativo">Contato</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>AVENTURA E AÇÃO</h1>
                <div>
                    <a href="#" class="btn">ASSISTIR AO VÍDEO</a>
                    <a href="#" class="btn">LEIA MAIS SOBRE O ASSUNTO</a>
                </div>
            </main>
        </section>

        <section id="pagina-cadastro">
            <div class="cadastro">
                <div class="col-12 col-sm-2 col-md-6 col-lg-6 mt-2">
                    <div class="card" style="height: 100%">
                        <img class="card-img-top" src="img/fundo2.jpg" alt="Anime">
                        <form action="anime-salvar.php" method="POST" enctype="multipar/form-data">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Titulo do anime</label>
                                    <input type="text" class="form-control" name="titulo" id="exampleInputEmail1"
                                        aria-describedby="Nome do Anime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                                    <input type="text" class="form-control" name="categoria" id="exampleInputEmail1"
                                        aria-describedby="Categoria do Anime">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Qtd de Episódios</label>
                                    <input type="number" class="form-control" name="qtd" id="exampleInputEmail1"
                                        aria-describedby="Nome do anime">
                                </div>
                                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>