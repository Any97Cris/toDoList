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
            <input type="text" name="tarefa" id="terefa">
        </div>
        <table class="table table-dark table-bordered border-secondary align-middle tamanhoTable">
            <thead>
                <th class="table-dark">Nome</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <td>PHP</td>
                <td>Eloquent</td>
                <td>15/11/2022</td>
                <td>
                    <a href="#">Editar</a>
                    <a href="#">Excluir</a>
                </td>
            </tbody>
        </table>
    </div>
</body>
</html>