<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
       

</head>
<body>
    <div class="container">
        <div class="titulo">
            <h1>Lista de Tarefas</h1>  
            <form action="/" method="GET">          
                <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar atividade..." aria-label="Example text with button addon" aria-describedby="button-addon1">
            <br>                
                <input type="submit" value="Pesquisar" class="btn btn-secondary btn-lg" type="button" id="button-addon1"></a>   
                <a href="/cadastrar" class="btn btn-success btn-lg">Cadastrar Tarefa</a>             
            </form>
            
        </div>
        <table class="table tamanhoTable">
            <thead>
                <th width="30%">Nome</th>
                <th width="50%">Descrição</th>
                <th width="20%" style="text-align: center">Ações</th>
            </thead>
            @foreach($tarefas as $tarefa)
            <tbody>                
                
                <td>{{$tarefa->name}}</td>
                <td>{{$tarefa->description}}</td>
                <td style="text-align: center">
                    <form action="/deletar/{{$tarefa->id}}" method="POST">
                    @csrf
                    <a href="/editar/{{$tarefa->id}}" class="btn btn-primary"><ion-icon name="create-outline"></ion-icon>Editar</a>
                    <input type="submit" value="Excluir" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
                    </form>
                </td>
                
            </tbody>
            @endforeach
        </table>
    </div>

    <!-- ION-ICON - Inseir Icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>