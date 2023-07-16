<header>

  <nav
    class="fixed top-0 left-0 z-20 w-full border-b border-gray-200 bg-white/75 backdrop-blur dark:border-gray-600 dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
      <a href="{{ route('index') }}" class="flex items-center">
        <span class="text-primary self-center whitespace-nowrap text-2xl font-bold dark:text-white">QiRin.</span>
      </a>
      <div class="flex md:order-2">
        <button type="button"
          class="mr-3 rounded-lg bg-teal-500 px-4 py-2 text-center text-sm font-medium text-white hover:bg-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:mr-0">Login</button>
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
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
          class="mt-4 flex flex-col p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:p-0 md:dark:bg-gray-900">
          <li>
            <a href="#"
              class="block rounded py-2 pl-3 pr-4 text-white md:bg-transparent md:p-0 md:text-black font-semibold md:dark:text-blue-500"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="#"
              class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Team</a>
          </li>
          <li>
            <a href="#"
              class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:dark:hover:bg-transparent">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</header>
