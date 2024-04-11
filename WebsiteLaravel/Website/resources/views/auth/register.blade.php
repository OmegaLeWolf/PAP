<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class='grid grid-cols-2 gap-4 font-mono'>
        @csrf

        <!-- Name -->
        <div class='mt-4 font-mono'>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
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

        <!-- School Year -->
        <div class="mt-4">
            <x-input-label for="TurmaAno" :value="__('Grade')" />
            <select id="TurmaAno" name="TurmaAno" class="block mt-1 w-full rounded border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('TurmaAno')" required autofocus>
                                
                <?php
                for ($year = 1; $year <= 12; $year++) {
                    echo "<option value=\"$year\">$year º</option>";
                }
                ?>
                                
            </select>
            <x-input-error :messages="$errors->get('TurmaAno')" class="mt-2" />
        </div>

        <!-- Class -->
        <div class="mt-4">
            <x-input-label for="class" :value="__('Class')" />
            <select id="class" name="class" class="block mt-1 w-full rounded border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('class')" required autofocus>
                                
                <?php
                    $loop = 0;
                    for ($letter = 'A'; $loop <= 25; $letter++) {
                        echo "<option value=\"$letter\">$letter</option>";
                        $loop ++;   
                    }   
                ?>
                                
            </select>
            <x-input-error :messages="$errors->get('class')" class="mt-2" />
        </div>

        <!-- School -->
        <div class="mt-4">
            <x-input-label for="school" :value="__('School')" />
            <x-text-input id="school" class="block mt-1 w-full" type="text" name="school" :value="old('school')" required autofocus autocomplete="school" />
            <x-input-error :messages="$errors->get('school')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4 col-span-2 grid grid-cols-2">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 mt-5 flex justify-center">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
