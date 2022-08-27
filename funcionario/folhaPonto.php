<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Folha de Ponto</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../js/clock.js"></script>

    <div class="container-fluid m-auto text-center">
        <header>
            <div class="row">
                <?php
                    include '../components/navbar.php';
                ?>
            </div>
        </header>
        <main>
            <div class="row">
                <div class="person">
                    <div class="container">
                        <div class="container-inner">
                            <img class="circle"/>
                            <img class="img img1" alt="Folha de Ponto" src="../img/ponto.svg"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h1 class="h3 mb-2 fw-normal">REGISTRE SUA ENTRADA</h1>
            </div>
            <div class="row mt-2">
                <main class="form-add w-100 m-auto">
                    <div class="container1">
                        <div class="clock"></div>
                    </div>
                </main>
            </div>
            <div class="row">
                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary">REGISTRAR</button>
                </div>
            </div>
            <div class="row mt-5">
                <a href="painelFuncionario.php"><img class="mt-3 voltar" src="../img/voltar.png" alt="voltar"></a>
            </div>
            <div class="row">
                <p>VOLTAR</p>
            </div>
        </main>
        <div class="row mt-5">
            <?php
                include '../components/footer.php';
            ?>
        </div>
    </div>  
</body>
</html>