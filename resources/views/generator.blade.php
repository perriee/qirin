@extends('layouts.master')

@section('navbar')
  @include('partials.header')
@endsection

@section('content')
  {{-- Start Generate QR Section --}}
  <section id="generate-qr" class="pt-28 lg:pt-64">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 lg:w-1/2">
          <h1 class="mb-5 text-3xl font-semibold md:text-5xl">Gas masukin URL kamu</h1>
          <form action="{{ route('generate') }}" method="POST">
            @csrf
            <div class="mb-6 flex gap-2 lg:block">
              <input type="text" name="link" id="link"
                class="block w-4/5 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 placeholder:italic focus:border-primary focus:ring-primary lg:mb-3 lg:w-full"
                placeholder="URL . . ." required>
              <button type="submit"
                class="w-1/5 rounded-lg bg-primary px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-teal-600 focus:outline-none lg:w-full">Buat
                QR</button>
              @if (!Auth::user()->is_premium)
                <p class="pt-2 text-sm italic text-slate-400"><span class="font-semibold">5x</span> Gratis Generate QR
                  Code perhari.</p>
              @else
                <p class="pt-2 text-sm italic text-slate-400">Generate QR sepuasnya.</p>
              @endif
            </div>
          </form>
        </div>

        <div class="flex w-full flex-col items-center px-4 lg:w-1/2 lg:items-end">
          @if (isset($imageData))
            <img src="{{ $imageData }}" class="w-72" alt="QR CODE RESULT">
            <a href="{{ $imageData }}" download="qr-code">
              <button
                class="mt-3 w-72 rounded-lg border-2 border-primary px-5 py-2.5 text-sm font-semibold text-primary hover:bg-primary hover:text-white focus:outline-none">Download
              </button>
            </a>
          @endif
        </div>
      </div>
    </div>
  </section>
  {{-- End Generate QR Section --}}
@endsection
