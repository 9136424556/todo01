<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <h1 class="header-logo">
            Todo
        </h1>
    </header>

    <main>
         @yield('main')
    </main>
   
</body>
</html>