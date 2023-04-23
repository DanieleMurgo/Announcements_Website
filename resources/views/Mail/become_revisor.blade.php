<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it</title>
</head>
<body>
    <h1>L'utente {{$user->name}} ha richiesto di diventare revisore</h1>
    <h2>Ecco i suoi dati:</h2>
    <h3>Nome: </h3><p>{{$user->name}}</p>
    <h3>Email: </h3><p>{{$user->email}}</p>
    <h3>Parla di sé: </h3><p>{{$about}}</p>
    <h3>Se vuoi renderlo revisore clicca qui: </h3>
    <a href="{{route('make.revisor', compact ('user'))}}">Rendi revisore</a>
</body>
</html>