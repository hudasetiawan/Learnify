@extends('layout.user-skeleton')

@section('title', 'Dashboard')

@section('title-header', 'Dashboard')

@section('content')
    <article class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
        <section class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
            <span class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Hai,
                {{ auth()->user()->name }}</span>
            <section class="self-stretch justify-start items-start gap-2.5 inline-flex">
                <p class="grow shrink basis-0 text-[#fffffe] text-base font-normal font-fredoka leading-normal">Ready to
                    start your day with us?</p>
            </section>
        </section>
        <img class="w-64 h-64" src="{{ asset('img/header-dashboard-icon.png') }}" />
    </article>

    <article class="w-full h-fit mt-20 flex flex-row gap-10 flex-wrap">
        <a href="{{ route('admin.course') }}"
            class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/online-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Pemrograman Web
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Pelajari dasar-dasar HTML, CSS, dan JavaScript untuk membangun website yang interaktif dan responsif.
                </p>
            </section>
        </a>

        <a href="#"
            class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/online-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Desain Web
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Eksplorasi elemen desain visual untuk menciptakan website yang menarik dan user-friendly.
                </p>
            </section>
        </a>

        <a href="#"
            class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/online-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Jaringan Dasar
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Belajar konsep jaringan komputer mulai dari IP address hingga konfigurasi LAN.
                </p>
            </section>
        </a>

        <a href="#"
            class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/online-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Matematika
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Tingkatkan kemampuan logika dan pemecahan masalah melalui materi matematika dasar hingga lanjutan.
                </p>
            </section>
        </a>

        <a href="#"
            class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/online-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Bahasa Indonesia
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Tingkatkan kemampuan berbahasa Indonesia, mulai dari tata bahasa hingga menulis kreatif.
                </p>
            </section>
        </a>

        <a href="#"
            class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
            <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                <img class="w-14 h-14" src="{{ asset('img/online-course.png') }}" alt="Online Course">
            </section>
            <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                    Bahasa Jawa
                </h2>
                <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                    Pelajari budaya Jawa melalui pemahaman bahasa, aksara, dan sastra Jawa.
                </p>
            </section>
        </a>
    </article>
@endsection
