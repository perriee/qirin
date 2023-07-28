@extends('layouts.master')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
      <div
        class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
        <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl text-center">
            Register
          </h1>
          <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <div>
              <input type="text" name="name" id="name"
                class="focus:ring-primary focus:border-primary block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Name" required="">
            </div>
            <div>
              <input type="email" name="email" id="email"
                class="focus:ring-primary focus:border-primary block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Email" required="">
            </div>
            <div>
              <input type="password" name="password" id="password" placeholder="Password"
                class="focus:ring-primary focus:border-primary block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                required="">
            </div>
            <div>
              <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password"
                class="focus:ring-primary focus:border-primary block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                required="">
            </div>
            <button type="submit"
              class="focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full rounded-lg bg-primary px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-teal-700 focus:outline-none focus:ring-4">Register</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Sudah punya akun? <a href="{{ route('login') }}"
                class="text-primary dark:text-primary-500 hover:underline font-semibold">Masuk.</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection