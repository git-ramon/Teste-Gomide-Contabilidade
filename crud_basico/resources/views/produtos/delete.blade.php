<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Apagar Produto</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 class="navbar-brand">Apagar Produto</h1>
            </div>
          </nav><br>

    <form action="{{ route('deletar_produto', ['id' => $prod->id] )}}" method="POST">
        <div class="row mb-3">
            {{ csrf_field() }}
            <label>Deseja Realmente excluir <strong>{{ $prod->nome }}</strong> do sistema ?</label>

            <div class="d-grid gap-2">
                <br><button class="btn btn-danger">Sim</button>
            </div>
        </div>
    </form><br>
</body>
</html>