<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> --}}
        <div class="col-12 mb-3">
            <label for="name" :value="__('Name')" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}
        <div class="col-12 mb-3">
            <label for="email" :value="__('Email')" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}

        <div class="col-12 mb-3">
            <label for="password" :value="__('Password')" class="form-label">Password</label>
            <div class="input-group" id="show_hide_password">
                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password"> 
                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <!-- Confirm Password -->
        {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}
        <div class="col-12 mb-3">
            <label for="password_confirmation" :value="__('Confirm Password')" class="form-label">Confirm Password</label>
            <div class="input-group" id="show_hide_password">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"> 
                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-3">
            
            {{-- <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button> --}}
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-grd btn-grd-info">Register</button>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
