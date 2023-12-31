{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>

    <div class="form-box">
        <!------------------- registration form -------------------------->
        <div class="login-container" id="login">
            <div class="top">
                <span>
                    <a href="{{route('login')}}" >Login</a>هل تمتلك حساب ؟
                </span>
                <header>Sign Up</header>
            </div>
            <form method="post" action="{{ route('register') }}">
                @csrf
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="number" id="phone" name="phone" required maxlength="50" class="input-field" placeholder="رقم الهاتف" :value="old('phone')">
                            <i class="fa-solid fa-phone"></i>
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <div class="input-box">
                            <input type="text" id="name" name="name" required maxlength="50" class="input-field" placeholder=" الاسم " :value="old('name')" autofocus autocomplete="name">
                            <i class="bx bx-user"></i>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="input-box">
                        {{-- <input type="text" class="input-field" placeholder="البريد الالكتروني"> --}}
                        <input type="email" id="email" name="email" class="input-field" placeholder="البريد الالكتروني" required maxlength="50" :value="old('email')">
                        <i class="bx bx-envelope"></i>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <input type="password" id="password" name="password" class="input-field" placeholder="كلمة المرور"  required autocomplete="new-password">
                        <i class="bx bx-lock-alt"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <a>
                            <input type="submit" name="login" class="submit" value="تسجيل">
                        </a>
                    </div>
            </form>
        </div>
    </div>

</x-app-layout>
