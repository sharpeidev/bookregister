<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Livros</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #222; padding: 5px; text-align: left; }
        th { background-color: #F2F2F2; }
    </style>
</head>
<body>
<h2>Relatório de Livros</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Autor</th>
        <th>Livros</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($autores as $autor)
        <tr>
            <td>{{ $autor->autor }}</td>
            <td>{{ $autor->livros }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
