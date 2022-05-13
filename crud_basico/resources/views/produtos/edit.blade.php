<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Editar Produto</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 class="navbar-brand">Editar Produtos</h1>
            </div>
          </nav><br>

        <form action="{{ route('editar_produto', ['id' => $prod->id] )}}" method="POST">
            <div class="row mb-3">
                {{ csrf_field() }}
                <label class="col-sm-2 col-form-label">Nome</label>
                <div  class="col-sm-10">
                    <input type="text" name="nome" value="{{ $prod->nome }}" class="form-control"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Preço de Custo</label>
                <div  class="col-sm-10">
                    <input type="number" name="custo" value="{{ $prod->custo }}"  class="form-control"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Preço de Venda</label>
                <div  class="col-sm-10">
                    <input type="number" name="preco" value="{{ $prod->preco }}"  class="form-control"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Quantidade</label>
                <div  class="col-sm-10">
                    <input type="number" name="quantidade" value="{{ $prod->quantidade }}"  class="form-control"  required><br>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>  
        </form><br>
        
    </div>
</body>
</html>