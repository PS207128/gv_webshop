<x-app-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form action="{{ route('password.email') }}" method="post" class="w-[400px] mx-auto p-6 my-16">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-5">
          Vul hier uw E-mail in om uw wachtwoord te resetten
        </h2>
        <p class="text-center text-gray-500 mb-6">
          or
          <a
            href="{{route('login')}}"
            class="text-purple-600 hover:text-purple-500"
            >Inloggen met een bestaand account</a
          >
        </p>

        <div class="mb-3">
          <input
            id="loginEmail"
            type="email"
            name="email"
            placeholder="Uw email adres"
            class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
          />
        </div>
        <button
          class="btn-primary bg-green-500 hover:bg-green-600 active:bg-green-700 w-full"
        >
          Versturen
        </button>
      </form>
</x-app-layout>
