<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thank you for signing up! To activate your account, please verify your email address by entering the code we sent to your email.') }}
    </div>

    <form method="POST" action="{{ route('verified.store') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Verification code')" />

            <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
