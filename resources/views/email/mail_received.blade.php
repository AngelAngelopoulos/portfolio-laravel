<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Recibiste un mensaje de: <strong>{{ $msg['name'] }}</strong> con el correo <strong>{{ $msg['email'] }}</strong></p>
    <p><strong>Asunto</strong>: {{ $msg['subject'] }}</p>
    <p><strong>Cuerpo</strong>: <br> {{ $msg['message'] }}</p>

{{ var_dump($msg) }}
</body>
</html>
