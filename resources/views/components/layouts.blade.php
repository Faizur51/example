<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>

<header class="bg-light" style="height: 100px">
    <h1>this is header</h1>
</header>
<main>
    {{$slot}}
</main>
<footer class="bg-light" style="height: 100px">
    <h1>this is footer</h1>
</footer>
</body>
</html>
