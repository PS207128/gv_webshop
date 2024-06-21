<x-app-layout>

<form
        action="{{ route('register') }}"
        method="post"
        class="w-[400px] mx-auto p-6 my-16"
      >
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-4">Account aanmaken</h2>
        <p class="text-center text-gray-500 mb-3">
          Of
          <a
            href="{{ route('login') }}"
            class="text-sm text-purple-700 hover:text-purple-600"
            >log in met een bestaand account</a
          >
        </p>
        <div class="mb-4">
          <input
            placeholder="Uw naam"
            type="text"
            name="name"
            x-model="form.name"
            @input="validateName()"
            class="border-gray-300 focus:outline-none  rounded-md w-full"
          />
        </div>
        </p>
        <div class="mb-4">
          <input
            placeholder="Uw Email"
            type="email"
            name="email"
            class="border-gray-300 focus:outline-none  rounded-md w-full"
          />
        </div>
        <div class="mb-4">
          <input
            placeholder="Wachtwoord"
            type="password"
            name="password"
            class="border-gray-300 focus:outline-none  rounded-md w-full"
          />
        </div>
        </div>
        <div class="mb-4">
          <input
            placeholder="Herhaal het wachtwoord"
            type="password"
            name="password_confirmation"
            class="border-gray-300 focus:outline-none  rounded-md w-full"
          />
        </div>

        <button
          class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full"
        >
          Account aanmaken
        </button>
      </form>
</x-app-layout>