<nav class="fixed left-0 top-0 z-20 w-full border-b border-gray-200 bg-white/75 backdrop-blur">
  <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
    <a href="{{ route('index') }}" class="flex items-center">
      <span class="self-center whitespace-nowrap text-2xl font-bold text-primary">QiRin.</span>
    </a>
    <div class="flex gap-2 md:order-2">
      @if (Auth::check())
        <div class="hidden gap-3 sm:ml-6 sm:flex sm:items-center">
          <x-dropdown align="right" width="48">
            <x-slot name="trigger">
              <button class="text-md">
                Hai, <span class="font-semibold">{{ Auth::user()->name }}</span>
              </button>
            </x-slot>

            <x-slot name="content">
              @if (!Auth::user()->is_premium)
                <x-dropdown-link :href="route('premium.show')">
                  {{ __('Upgrade ke Premium') }}
                </x-dropdown-link>
              @endif

              <x-dropdown-link :href="route('profile.edit')">
                {{ __('Informasi Profil') }}
              </x-dropdown-link>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                                        this.closest('form').submit();">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            </x-slot>
          </x-dropdown>
          @if (Auth::user()->is_premium)
            <p class="rounded border-2 border-teal-600 px-2 py-2 text-sm text-primary">
              Mode Premium
            </p>
          @else
            <p class="rounded border-2 border-teal-600 px-2 py-2 text-sm text-primary">
              Mode Gratis
            </p>
          @endif
        </div>
      @else
        <a href="{{ route('login') }}">
          <button type="button"
            class="mr-3 rounded-lg border-2 border-primary px-4 py-2 text-center text-sm font-medium text-primary hover:bg-primary hover:text-white focus:outline-none md:mr-0">Login</button>
        </a>
        <a href="{{ route('register') }}">
          <button type="button"
            class="mr-3 rounded-lg border-2 border-primary px-4 py-2 text-center text-sm font-medium text-primary hover:bg-primary hover:text-white focus:outline-none md:mr-0">Register</button>
        </a>
      @endif
      <button data-collapse-toggle="navbar-sticky" type="button"
        class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
        aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-sticky">
      <ul
        class="mt-4 flex flex-col p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:p-0 md:dark:bg-gray-900">
        <li>
          <a href="{{ route('index') }}"
            class="{{ $title === 'Home' ? 'font-semibold' : '' }} block rounded py-2 pl-3 pr-4 text-slate-300 md:bg-transparent md:p-0 md:text-black md:dark:text-blue-500"
            aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{ route('team') }}"
            class="{{ $title === 'Team' ? 'font-semibold' : '' }} md:dark:hover:bg-transparentmd:dark:hover:text-blue-500 block rounded py-2 pl-3 pr-4 text-slate-300 hover:bg-gray-100 md:bg-transparent md:p-0 md:text-black md:hover:bg-transparent md:dark:text-blue-500">Team</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
