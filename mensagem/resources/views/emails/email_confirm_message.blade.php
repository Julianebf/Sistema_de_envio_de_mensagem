<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <h4>{{config('app.name')}}</h4>
    <p>Clique no link abaixo para confirmar o envio da menssagen </p>
    <p><a href="{{route('confirm',['purl' => $purl_code ])}}">Confirmar mensagen</a><p>
</body>
</html>