<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Tarefa</h2>
        <hr>
        <form action="/tarefas/upload/{{$tarefa->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome da tarefa</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$tarefa->name}}" placeholder="Digite o nome da tarefa....">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição da tarefa</label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Digite a descrição da tarefa....">{{$tarefa->description}}</textarea>
              </div>

              <a href="/" class="btn btn-warning">Voltar</a>
              <input type="submit" class="btn btn-success" value="Salvar"/>
            </div>  
        </form>
    </div>  
</body>
</html>