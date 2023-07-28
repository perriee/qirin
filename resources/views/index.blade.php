@extends('layouts.master')

@section('navbar')
  @include('partials.header')
@endsection

@section('content')
  {{-- Start Hero Section --}}
  <section id="home" class="pt-24 lg:pt-44">
    <div class="bg-white">
      <div class="mx-auto grid max-w-screen-xl px-4 py-8 lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-0">
        <div class="mr-auto place-self-center lg:col-span-7">
          <h1 class="mb-4 max-w-2xl text-4xl font-semibold leading-none tracking-tight md:text-5xl xl:text-6xl">
            BUAT LINK KAMU JADI LEBIH <span class="font-bold text-primary">MENARIK</span></h1>
          <p class="mb-6 max-w-2xl text-slate-400 md:text-lg lg:mb-8 lg:text-2xl">QiRin
            adalah platform pembuat QR Code dinamis yang membantu Anda menjadikan link menjadi lebih mudah untuk di akses.
          </p>
          <a href="{{ route('create') }}"
            class="mr-3 inline-flex items-center justify-center gap-3 rounded-lg bg-primary px-5 py-3 text-center text-base font-medium text-white hover:bg-teal-700">
            Buat Sekarang
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
              <path fill-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                clip-rule="evenodd" />
            </svg>
          </a>

        </div>
        <div class="ml-auto hidden lg:col-span-5 lg:mt-0 lg:flex">
          <img src="{{ asset('images/qr-code-hero.png') }}" class="w-96" alt="mockup">
        </div>
      </div>
    </div>
  </section>
  {{-- End Hero Section --}}
@endsection
