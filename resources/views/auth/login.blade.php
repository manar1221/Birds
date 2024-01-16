{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
            <x-primary-button class="ml-3">
                <a href="{{route('register')}}"> register </a>
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>
    <div class="form-box w-100" style="background-color: #d39ec2;">

        <!------------------- login form -------------------------->
                 
        <div class="login-container" id="login">
            <div class="top">
                <span>
                    <a href="{{route('register')}}" > Sign Up </a>
                    <span> '</span> انشاء حساب ؟</span>
                <header>Login</header>
                
            </div>

            <form action="{{ route('login') }}" method="post" action="{{route('login')}}" enctype="multipart/form-data" >
            @csrf
                <div class="input-box">
                    <input type="email" name="email" class="input-field" placeholder="البريد الالكتروني"  required maxlength="50" class="cbox" :value="old('email')" autofocus>
                    <i class="bx bx-user"></i>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="input-box">
                    <input type="password" name="password"  class="input-field" placeholder="كلمة المرور" required maxlength="20" class="cbox" autocomplete="current-password">
                    <i class="bx bx-lock-alt"></i>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="input-box">
                    <a>
                        <input type="submit" name="login" class="submit" value="تسجيل الدخول" >
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
