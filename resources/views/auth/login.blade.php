<x-app-layout>
<form action="{{route('login')}}" method="post" class="w-[400px] mx-auto p-6 my-16">
    @csrf
        <h2 class="text-2xl font-semibold text-center mb-5">
        Log in op jouw account

        </h2>
        <p class="text-center text-gray-500 mb-6">
          Of
          <a
            href="{{route('register')}}"
            class="text-sm text-purple-700 hover:text-purple-600"
            >maak een nieuw account aan</a
          >
        </p>
        <div class="mb-4">
          <input
            id="loginEmail"
            type="email"
            name="email"
            placeholder="Uw email adres"
            class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
          />

        </div>
        <div class="mb-4">
          <input
            id="loginPassword"
            type="password"
            name="password"
            placeholder="Uw wachtwoord"
            class="border-gray-300 focus:border-purple-500 focus:outline-none focus:ring-purple-500 rounded-md w-full"
          />
        </div>

        <div class="flex justify-between items-center mb-5">
          <div class="flex items-center">
            <input
              id="loginRememberMe"
              type="checkbox"
              name="remember"
              class="mr-3 rounded border-gray-300 text-purple-500 focus:ring-purple-500"
            />
            <label for="loginRememberMe">Onthoud me</label>
          </div>
          <a href="{{route('password.request')}}" class="text-sm text-grey-700 hover:text-grey-600">Wachtwoord vergeten?</a>
        </div>
        <button
          class="btn-primary bg-green-500 hover:bg-green-600 active:bg-green-700 w-full"
        >
          Login
        </button>
    </form>

   
</x-app-layout>
