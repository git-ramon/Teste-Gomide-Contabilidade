<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('../css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Cadastro de Produto</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 class="navbar-brand">Cadastro de Produtos</h1>
            </div>
          </nav><br>
    
    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p><br>
    @endif
    @if(session('msg-erro'))
        <p class="msg-erro">{{ session('msg-erro') }}</p><br>
    @endif

        <form action="{{ route('cadastro_produto') }}" method="POST">
            <div class="row mb-3">
                {{ csrf_field() }}
                <label class="col-sm-2 col-form-label">Nome</label>
                <div  class="col-sm-10">
                    <input type="text" name="nome" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Preço de Custo</label>
                <div  class="col-sm-10">
                    <input type="number" name="custo" class="form-control"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Preço de Venda</label>
                <div  class="col-sm-10">
                    <input type="number" name="preco" class="form-control"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Quantidade</label>
                <div  class="col-sm-10">
                    <input type="number" name="quantidade" class="form-control"  required><br>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>  
        </form><br>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço de Custo</th>
                <th scope="col">Preço de Venda</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Açoes</th>
            </tr>
        </thead>

        <?php foreach ($prod as $p) : ?>
            <tbody>
                <tr>
                    <td><?php echo $p['id'] ?></td>
                    <td><?php echo $p['nome'] ?></td>
                    <td><?php echo $p['custo'] ?></td>
                    <td><?php echo $p['preco'] ?></td>
                    <td><?php echo $p['quantidade'] ?></td>
                    <td>
                        <button class="btn btn-warning" type="button">
                            <a href="/produtos/editar/{{ $p->id }}">Editar</a>
                        </button>
                        <button class="btn btn-danger" type="button">
                            <a href="/produtos/deletar/{{ $p->id }}">Excluir</a>
                        </button>
                    </td>  
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
   
    {{ $prod->links() }}
    
    </div>
</body>
</html>