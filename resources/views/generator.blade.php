@extends('layouts.master')

@section('content')
  {{-- Start Generate QR Section --}}
  <section id="generate-qr" class="pt-64">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2">
          <h1 class="mb-5 text-3xl font-semibold md:text-5xl">Gas masukin URL kamu</h1>
          <form action="{{ route('generate') }}" method="POST">
            @csrf
            <div class="mb-6">
              <input type="text" name="link" id="link"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder:italic focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="URL . . ." required>
            </div>
            <button type="submit"
              class="bg-primary dark:bg-primary w-full rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-300 dark:hover:bg-teal-600 dark:focus:ring-teal-800">Buat
              QR</button>
          </form>
        </div>

        <div class="flex flex-col items-end px-4 lg:w-1/2">
          @if (isset($imageData))
            <img src="{{ $imageData }}" class="w-72" alt="QR CODE RESULT">
            <a href="{{ $imageData }}" download="">
              <button
                class="dark:bg-primary mt-3 w-72 rounded-lg border-2 border-teal-500 px-5 py-2.5 text-sm font-semibold text-teal-500 hover:bg-teal-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-teal-300 dark:hover:bg-teal-600 dark:focus:ring-teal-800">Download
                QR
              </button>
            </a>
          @endif
        </div>
      </div>
    </div>
  </section>
  {{-- End Generate QR Section --}}
@endsection
