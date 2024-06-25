<x-app-layout>
    <div class="w-[400px] mx-auto py-32">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Bedankt voor je aanmelding! Voordat je begint, zou je je e-mailadres kunnen verifiëren door op de link te klikken die we zojuist naar je hebben gemaild? Als je de e-mail niet hebt ontvangen, sturen we je graag een nieuwe.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Een nieuwe verificatielink is verzonden naar het e-mailadres dat je hebt opgegeven bij de registratie.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>