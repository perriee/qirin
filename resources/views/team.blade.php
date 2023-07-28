@extends('layouts.master')

@section('navbar')
  @include('partials.header')
@endsection

@section('content')
  <section class="bg-white pt-14 dark:bg-gray-900">
    <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
      <div class="mx-auto mb-8 max-w-screen-sm text-center lg:mb-16">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-primary dark:text-white">Tim Kami</h2>
      </div>
      <div class="mb-6 grid gap-8 md:grid-cols-2 lg:mb-16">
        <div class="items-center rounded-lg bg-gray-50 shadow dark:border-gray-700 dark:bg-gray-800 sm:flex">
          <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ url('images/ferry-febriansyah.png') }}"
              alt="Ferry Febriansyah">
          </a>
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">Ferry Febriansyah</a>
            </h3>
            <span class="text-gray-500 dark:text-gray-400">21.12.2249</span>
            <p class="mb-4 mt-3 font-light text-gray-500 dark:text-gray-400">Seorang Mahasiswa S1 Sistem Informasi di
              Universitas Amikom Yogyakarta.</p>
          </div>
        </div>
        <div class="items-center rounded-lg bg-gray-50 shadow dark:border-gray-700 dark:bg-gray-800 sm:flex">
          <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ url('images/abdissabiq-haqi.png') }}"
              alt="Abdissabiq Haqi">
          </a>
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">Abdissabiq Haqi</a>
            </h3>
            <p class="mb-4 mt-3 font-light text-gray-500 dark:text-gray-400">Seorang Mahasiswa S1 Sistem Informasi di
              Universitas Amikom Yogyakarta.</p>
            <span class="text-gray-500 dark:text-gray-400">21.12.2232</span>
          </div>
        </div>
        <div class="items-center rounded-lg bg-gray-50 shadow dark:border-gray-700 dark:bg-gray-800 sm:flex">
          <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ url('images/bayu-ahmad.png') }}"
              alt="Bayu Ahmad">
          </a>
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">Bayu Ahmad</a>
            </h3>
            <span class="text-gray-500 dark:text-gray-400">21.12.2229</span>
            <p class="mb-4 mt-3 font-light text-gray-500 dark:text-gray-400">Seorang Mahasiswa S1 Sistem Informasi di
              Universitas Amikom Yogyakarta.</p>
          </div>
        </div>
        <div class="items-center rounded-lg bg-gray-50 shadow dark:border-gray-700 dark:bg-gray-800 sm:flex">
          <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ url('images/muhammad-alfauzan.png') }}"
              alt="Muhammad Alfauzan">
          </a>
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">Muhammad Alfauzan</a>
            </h3>
            <span class="text-gray-500 dark:text-gray-400">21.12.2254</span>
            <p class="mb-4 mt-3 font-light text-gray-500 dark:text-gray-400">Seorang Mahasiswa S1 Sistem Informasi di
              Universitas Amikom Yogyakarta.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
