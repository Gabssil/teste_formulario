<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="bg-body-secondary">
    <div class="container text-center bg-white">
        <div class="row">   
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Consultar</a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
            <form method="POST" action="teste.class.php">  
                <div class="col" align="left">
                    <div class="mb-3">
                        &nbsp;
                        <label for="formGroupExampleInput" class="form-label"><br><b>Cadastrar - Agendamento de Potenciais do Cliente</b>
                        <br> Sistema utilidado para agendamento do serviço.<br>
                        Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                    </div>
                    <div class="mb-3" align="left">
                        &nbsp;
                        <label for="formGroupExampleInput2" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx)xxxx-xxxx">          
                    </div>
                </div>    
                <div class="row">
                    <div class="col-20" align="left">
                        &nbsp;
                        <label for="formGroupExampleInput2" id="origem" class="form-label">Origem:</label>
                        <select class="form-select" aria-label="Default select example" name="origem">
                            <option value="Celular" selected>Celular</option>
                            <option value="whatsapp">whatsapp</option>
                            <option value="Telefone fixo">Telefone fixo</option>
                        </select>
                    </div>
                    <div class="mb-3" align="left">
                    &nbsp;
                    <br>
                    <label for="formGroupExampleInput2" class="form-label">&nbsp;Data de Contato:</label>
                    <input type="date" class="form-control" id="datadecontato" name="datadecontato">
                </div>
                <div class="col" align="left">
                <div class="mb-3">
                    &nbsp;
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
                </div>
                <div class="col-20 p-3" align="left">
                    <input type = "submit" class="bnt-check" id="bnt-check" autocomplete="off">
                    <label class="bnt bnt-primary" for="bnt=checl"></label>
                </div>
            </form>
        </div>
    </div>
  </body>
</html>