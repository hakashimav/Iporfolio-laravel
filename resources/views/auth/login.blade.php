@extends('layout.layout')

@section('container')
<main id="main">
<x-guest-layout>
    <x-auth-card>

            <section id="contact" class="contact">
                <div class="container">
                    <nav id="navbar" class="nav-menu navbar">
                        <ul>
                            <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i>Retour à l'accueil</a></li>
                        </ul>
                    </nav>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="row" data-aos="fade-left">
                        <form method="POST" action="{{ route('login') }}" role="form" class="php-email-form">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group col-md-6">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="form-group col-md-6">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="ml-3 text-center" type="submit"> {{ __('Log in') }}</x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

    </x-auth-card>
</x-guest-layout>
</main>
@endsection
