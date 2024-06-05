<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .mobile-menu.hidden {
            display: block;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
            transition: opacity 0.6s ease;
            opacity: 0;
            transform: translateX(100%);
            overflow-y: auto;
        }

        .mobile-menu.visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
    <link rel="stylesheet" href="@yield('css')">
    <title>@yield('title')</title>
</head>
<body>
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">CFA</span>
                    <!--<img class="h-8 w-auto" src="/img/cfa.png" alt="">-->
                    <h2 class='h-auto w-auto'>CFA</h2>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="open-menu">
                    <span class="sr-only">Abrir menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Cursos</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Competições</a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Sobre Nós</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:gap-x-10 lg:justify-end">
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Entrar</a>
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="mobile-menu lg:hidden hidden" role="dialog" aria-modal="true" id="mobile-menu">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">CFA</span>
                <h2 class='h-auto w-auto'>CFA</h2>
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-menu">
                <span class="sr-only">Fechar menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    {{-- Opções do menu para membros --}}
                    @auth

                    @endauth

                    {{-- Opções do menu para visitantes --}}
                    @guest
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Cursos</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Competições</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sobre nós</a>
                    @endguest

                    {{-- Opções para todos usuários --}}

                </div>
                <div class="py-6">
                    {{-- Opções do menu para membros --}}
                    @auth
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sair</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Perfil</a>
                    @endauth

                    {{-- Opções do menu para visitantes --}}
                    @guest
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Entrar</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Cadastrar</a>
                    @endguest

                    {{-- Opções para todos usuários --}}
                </div>
            </div>
        </div>
    </header>
    <div class="bg-white">
        {{-- Conteúdo dinâmico --}}
        @yield('content')
    </div>

    {{-- Script para funcionamento do menu de navegação --}}
    <script>
    document.getElementById('open-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('hidden');
        document.getElementById('mobile-menu').classList.add('visible');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('visible');
        document.getElementById('mobile-menu').classList.add('hidden');
    });
    </script>
</body>
</html>
