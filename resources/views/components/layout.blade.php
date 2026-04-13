<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Twirper' : 'Twirper' }}</title><!-- entendi que essa parte de php pega a variavel que ta no titulo e acrescenta a variavel de titulo "alguma coisa" - Twirper, mais se não tiver só reverte pra twirper mesmo, o do segundo parents-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <nav class="w-100% h-15 bg-gray-200 flex p-3" >
       <div>
            <a href="">Twirper</a>
       </div>
       <div class="flex-end">
            <a href="">LogIn</a>
            <a href="">SignUp</a>
       </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
        {{$slot}}
    </main>

    <footer class=" w-100% h-15 bg-gray-200 flex p-3">
        <div>
            <p>© 2026 Twirper - Built with Laravel by Gustavo Nicácio</p>
        </div>
    </footer>
</body>

</html>