<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-r from-[#425E83] via-[#6999c9] to-[#5D3A93]" > 
    <nav class="w-full h-15 bg-gray-200 flex p-3 justify-between " >
       <div class="justify-start content-center flex gap-3">

            <img src="{{ asset('images/logo.png') }}" alt="Twirper" > <!-- o asset seta basicamente, a imagem como uma var no local, pedi ajuda pro gpt com isso-->
            <a href="/" Class="text-xl text-gray-500 hover:text-black"><b>Twirper</b></a>
            
       </div>
       <div>
       @auth
        <span class="text-sm">{{ auth()->user()->name }}</span>
        <form method="POST" action="/logout" class="inline">
            @csrf
            <button type="submit" class="btn btn-ghost btn-sm">Logout</button>
        </form>
        @else
            <a href="{{ route('login') }}" class="p-2 border border-gray-400 rounded-lg bg-white shadow-2xs hover:bg-gray-100">Log In</a>
            <a href="{{ route('register') }}" class="p-2 rounded-lg bg-[#425E83] shadow-2xs text-white hover:bg-[#6382aa]">Sign Up</a>
        @endauth
        </div>
    </nav>
    @if (session('success'))<!--Mensagem só aparece se a sessão der certo, -->
        <div class="toast toast-top toast-center">
            <div class="alert alert-success animate-fade-out">
                <svg xmlns="<http://www.w3.org/2000/svg>" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif
    <main class="flex-1 container mx-auto px-4 py-8">
        {{$slot}}
    </main>

    <footer class="bm-0 w-full bg-gray-200 flex p-3 justify-center items-center">
        <div>
            <p>© 2026 Twirper  <u>Built with Laravel by Gustavo Nicácio</u></p>
        </div>
    </footer>
</div>
</body>

</html>