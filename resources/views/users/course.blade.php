@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header','Kelas')

@section('content')
    <div class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
        <div class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
            <div class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Pemrograman Web</div>
            <div class="self-stretch justify-start items-start gap-2.5 inline-flex">
                <div class="grow shrink basis-0 text-[#fffffe] text-base font-normal font-fredoka leading-normal">Ready
                    to start your day with us?</div>
            </div>
        </div>
    </div>

    <article class="w-full h-fit mt-20 flex flex-row gap-10 flex-wrap">
        <a href="{{ route('users.preTest')}}" class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/book-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Pre Test
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Uji awal untuk mengukur kemampuan.
                </p>
            </section>
        </a>

        <a href="{{route('users.material')}}" class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/book-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Dasar-dasar HTML
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Materi pengenalan HTML.
                </p>
            </section>
        </a>

        <a href="#" class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/book-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Dasar-dasar CSS
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Materi pengenalan CSS.
                </p>
            </section>
        </a>

        <a href="#" class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/book-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Dasar-dasar JavaScript
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Materi pengenalan Javascript.
                </p>
            </section>
        </a>

        <a href="#" class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/book-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Post Test
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Uji akhir untuk evaluasi hasil belajar.
                </p>
            </section>
        </a>
    </article>
    
@endsection