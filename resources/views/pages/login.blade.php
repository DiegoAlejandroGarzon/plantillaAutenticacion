@extends('../themes/base')

@section('head')
    <title>PROYECTO EVENTOS</title>
@endsection

@section('content')
    <div @class([
        'p-3 sm:px-8 relative h-screen lg:overflow-hidden bg-primary xl:bg-white dark:bg-darkmode-800 xl:dark:bg-darkmode-600',
        'before:hidden before:xl:block before:content-[\'\'] before:w-[57%] before:-mt-[28%] before:-mb-[16%] before:-ml-[13%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[-4.5deg] before:bg-primary/20 before:rounded-[100%] before:dark:bg-darkmode-400',
        'after:hidden after:xl:block after:content-[\'\'] after:w-[57%] after:-mt-[20%] after:-mb-[13%] after:-ml-[13%] after:absolute after:inset-y-0 after:left-0 after:transform after:rotate-[-4.5deg] after:bg-primary after:rounded-[100%] after:dark:bg-darkmode-700',
    ])>
        <div class="container relative z-10 sm:px-10">
            <div class="block grid-cols-2 gap-4 xl:grid">
                <!-- BEGIN: Login Info -->
                <div class="hidden min-h-screen flex-col xl:flex">
                        <img class="w-6" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" />
                        <span class="ml-3 text-lg text-white"> nombreSoftware </span>
                    <div class="my-auto">
                        <img class="-intro-x -mt-16 w-1/2" src="{{ Vite::asset('resources/images/illustration.svg') }}" alt="" />
                        <div class="-intro-x mt-10 text-4xl font-medium leading-tight text-white">
                            nombreSoftware
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                            llevar la gestión de su empresa a un nuevo nivel
                        </div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="my-10 flex h-screen py-5 xl:my-0 xl:h-auto xl:py-0">
                    <div class="mx-auto my-auto w-full rounded-md bg-white px-5 py-8 shadow-md dark:bg-darkmode-600 sm:w-3/4 sm:px-8 lg:w-2/4 xl:ml-20 xl:w-auto xl:bg-transparent xl:p-0 xl:shadow-none">
                        <h2 class="intro-x text-center text-2xl font-bold xl:text-left xl:text-3xl">
                            Iniciar Sesión
                        </h2>
                        <div class="intro-x mt-2 text-center text-slate-400 xl:hidden">
                            A few more clicks to sign in to your account. Manage all your
                            e-commerce accounts in one place
                        </div>
                        <div class="intro-x mt-8">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <x-base.form-input id="email" class="intro-x block min-w-full px-4 py-3 xl:min-w-[350px]" type="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <x-base.form-input id="password" class="intro-x mt-4 block min-w-full px-4 py-3 xl:min-w-[350px]" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="intro-x mt-5 text-center xl:mt-8 xl:text-left">
                                    <x-base.button class="w-full px-4 py-3 align-top xl:mr-3 xl:w-32" type="submit" variant="primary">
                                        Iniciar Sesión
                                    </x-base.button>
                                </div>
                                <br>
                                <a href="{{ route('users.register') }}">¿No tienes usaurio? Crea uno dando <b>click aquí</b></a>
                                <br>
                                <a href="{{ route('users.resetPasswordIndex') }}">¿Has olvidado la Contraseña?</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
    </div>
@endsection
