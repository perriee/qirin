@extends('layouts.master')

@section('content')
    {{-- Start Hero Section --}}
    <section id="home" class="pt-44">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 self-center lg:w-1/2">
            <h1 class="text-3xl font-semibold mb-5 md:text-5xl">BUAT LINK KAMU JADI LEBIH <span class="text-primary font-bold">MENARIK</span></h1>
            <p class="text-slate-400 mb-8 md:text-2xl">QiRin adalah platform pembuat QR Code dinamis yang membantu Anda menjadikan link menjadi lebih mudah untuk di akses.</p>
            <a href="{{ route('create') }}" class="bg-teal-500 hover:bg-teal-600 lg:text-xl hover:shadow-lg text-white px-4 py-2 lg:px-6 lg:py-3 rounded-full inline-block transition duration-300">Mulai Sekarang</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="mt-10">
              <img src="{{ asset('images/qr-code-hero.png') }}" class="w-96 ml-auto" alt="QR CODE">
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#149393" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,160C384,160,480,160,576,144C672,128,768,96,864,122.7C960,149,1056,235,1152,250.7C1248,267,1344,213,1392,186.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    {{-- End Hero Section --}}

    {{-- Start Team Section --}}
    <section id="team" class="pt-4 bg-primary">
      <div class="container">
        <div class="w-full pb-20">
          <h1 class="text-5xl text-white font-semibold text-center pb-6">Tim Kami</h1>
          <p class="text-2xl text-slate-200 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorum quia unde cupiditate sit dolorem distinctio eveniet magni, officia fuga.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-10">
          <div class="w-full self-center lg:w-1/5">
              <img src="{{ asset('images/perr-amcc-square.png') }}" alt="Ferry Febriansyah">
              <p class="text-xl text-center text-slate-200">Ferry Febriansyah</p>
              <p class="text-md italic text-center text-slate-200">FrontEnd</p>
            </div>
            <div class="w-full self-center lg:w-1/5">
              <img src="{{ asset('images/perr-amcc-square.png') }}" alt="Ferry Febriansyah">
              <p class="text-xl text-center text-slate-200">Ferry Febriansyah</p>
              <p class="text-md italic text-center text-slate-200">BackEnd</p>
            </div>
            <div class="w-full self-center lg:w-1/5">
              <img src="{{ asset('images/perr-amcc-square.png') }}" alt="Ferry Febriansyah">
              <p class="text-xl text-center text-slate-200">Ferry Febriansyah</p>
              <p class="text-md italic text-center text-slate-200">UI/UX</p>
            </div>
          </div>
          <div class="flex flex-wrap justify-center gap-10 pt-10">
            <div class="w-full self-center lg:w-1/5">
              <img src="{{ asset('images/perr-amcc-square.png') }}" alt="Ferry Febriansyah">
              <p class="text-xl text-center text-slate-200">Ferry Febriansyah</p>
              <p class="text-md italic text-center text-slate-200">Product Manager</p>
            </div>
            <div class="w-full self-center lg:w-1/5">
              <img src="{{ asset('images/perr-amcc-square.png') }}" alt="Ferry Febriansyah">
              <p class="text-xl text-center text-slate-200">Ferry Febriansyah</p>
              <p class="text-md italic text-center text-slate-200">Full Stack</p>
            </div>
        </div>
      </div>
    </section>
    {{-- End Team Section --}}

    {{-- <hr class="bg-blue-300 h-2"> --}}

    {{-- <div class="h-96"></div> --}}
@endsection