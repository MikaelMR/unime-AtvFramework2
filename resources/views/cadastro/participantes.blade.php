<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>

    <div class="container">
        <div colass = "row mt-5">

                <form method="post" action="">

                    @csrf

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="Text" class="form-control" name="nome" id="nome" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome</label>
                        <input type="Text" class="form-control" name="sobrenome" id="estilo" placeholder="Sobrenome">
                    </div>
                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="Text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="Text" class="form-control" name="email" id="email" placeholder="Email@email.com">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class ="btn btn-success">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
     </div>

</body>
</html>
