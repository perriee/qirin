@extends('layouts.master')

@section('content')
    {{-- Start Hero Section --}}
    <section id="home" class="pt-44">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 self-center lg:w-1/2">
            <h1 class="text-3xl font-semibold mb-5 md:text-5xl">BUAT LINK KAMU JADI LEBIH <span class="text-teal-500 font-bold">MENARIK</span></h1>
            <p class="text-slate-400 mb-8 md:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ad deleniti placeat quis cum odit, tempora minus suscipit. Accusantium, adipisci?</p>
            <a href="#" class="bg-teal-500 hover:bg-teal-600 lg:text-xl hover:shadow-lg text-white px-4 py-2 rounded-full inline-block transition duration-300">Mulai Sekarang</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="mt-10">
              <img src="{{ asset('images/qr-code-hero.png') }}" class="w-96 ml-auto" alt="QR CODE">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Start Generate QR Section --}}
    {{-- <div id="generate-qr" class="pt-36">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 self-center lg:w-1/2">
            <form action="#">
              <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- End Generate QR Section --}}
@endsection