<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class="row g-3" action="{{ route('login') }}">
        @csrf

        <div class="col-12">
            <label for="email" :value="__('Email')" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="col-12">
            <label for="password" :value="__('Password')" class="form-label">Password</label>
            <div class="input-group" id="show_hide_password">
                <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password"> 
                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember Me</label>
            </div>
        </div>
        @if (Route::has('password.request'))
        <div class="col-md-6 text-end">	
            <a href="{{ route('password.request') }}">Forgot Password ?</a>
        </div>
        @endif
        <div class="col-12">
            <div class="d-grid">
                <button type="submit" class="btn btn-grd btn-grd-info">Login</button>
            </div>
        </div>
        <div class="col-12">
            <div class="text-start">
                <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a>
                </p>
            </div>
        </div>
        <!-- Email Address -->
        {{-- <div class="col-12">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <!-- Password -->
        {{-- <div class="col-12">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        {{-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}
    </form>
</x-guest-layout>
