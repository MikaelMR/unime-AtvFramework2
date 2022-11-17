<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class = "row mt-5">
            <div class = "col-md-12">

                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{session::get('success')}}
                </div>
                @endif

            <div class = "col-md-12">
                <table class="table">

                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Data de Nascimento</th>
                        <th>Endereço</th>
                        <th>Email</th>
                    </tr>

                <div class="mb-3">

                    @foreach ($participantes as $participante )
                    <tr>
                        <td>{{ $participante['nome'] }}</td>
                        <td>{{ $participante['sobrenome'] }}</td>
                        <td>{{ $participante['data_nascimento'] }}</td>
                        <td>{{ $participante['endereco'] }}</td>
                        <td>{{ $participante['email'] }}</td>
                    </tr>
                    @endforeach

                </div>

                <div class="mb-3">
                    <form method="get" action="./participantes">
                        <button type="submit" class ="btn btn-success">Cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
