@extends('layouts.master')

@section('navbar')
  @include('partials.header')
@endsection

@section('content')
  <section class="bg-white pt-16 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
      <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-primary dark:text-white">Upgrade Akun Premium
        </h2>
        <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">Ayoo upgrade akun kamu ke premium agar bisa
          generate QR sepuasnya.</p>
      </div>
      <div class="flex justify-center gap-10 mt-20">
        <!-- Pricing Card -->
        <div
          class="flex w-96 flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
          <h3 class="mb-4 text-2xl font-bold">Gratisan</h3>
          <div class="my-8 flex items-baseline justify-center">
            <span class="mr-2 text-4xl font-extrabold">Rp 0</span>
          </div>
          <!-- List -->
          <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Generate QR <span class="font-semibold">10</span> kali per hari.</span>
            </li>
          </ul>
          <a href="{{ route('generate') }}"
            class="rounded-lg bg-primary px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-teal-700 dark:text-white dark:focus:ring-primary">Gas
          </a>
        </div>

        <!-- Pricing Card -->
        <div
          class="flex w-96 flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
          <h3 class="mb-4 text-2xl font-bold">Premium</h3>
          <div class="my-8 flex items-baseline justify-center">
            <span class="mr-2 text-4xl font-extrabold">Rp 15.000</span>
            <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/bulan</span>
          </div>
          <!-- List -->
          <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
              </svg>
              <span>Generate QR <span class="font-semibold">tak terbatas.</span></span>
            </li>
          </ul>
          <form action="{{ route('payment.store') }}" method="POST">
            @csrf
            <button type="submit"
              class="disable rounded-lg bg-primary px-5 py-2.5 w-full text-center text-sm font-medium text-white hover:bg-teal-700 dark:text-white dark:focus:ring-primary">Gas
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
