@extends('layout.user-skeleton')

@section('title', 'Kuis')

@section('title-header', 'Kuis')

@section('sidebarDisplay', '!hidden')
@section('sidebarToggleDisplay', '!hidden')

@section('content')
    <article class="w-full grid grid-cols-12 min-h-screen">
        <section class="w-full border-r flex flex-wrap gap-4 justify-center border-black py-40 col-span-2">
            <span
                class="w-11 h-11 text-center text-black text-2xl font-normal font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex-col justify-center items-center gap-2.5 inline-flex">
                1
            </span>
            <span
                class="w-11 h-11 text-center text-black text-2xl font-normal font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex-col justify-center items-center gap-2.5 inline-flex">
                2
            </span>
            <span
                class="w-11 h-11 text-center text-black text-2xl font-normal font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex-col justify-center items-center gap-2.5 inline-flex">
                3
            </span>
            <span
                class="w-11 h-11 text-center text-black text-2xl font-normal font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex-col justify-center items-center gap-2.5 inline-flex">
                4
            </span>
            <span
                class="w-11 h-11 text-center text-black text-2xl font-normal font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#9781ff] flex-col justify-center items-center gap-2.5 inline-flex">
                5
            </span>
        </section>
        <section class="w-full border-r py-48 px-40 flex flex-col gap-8 col-span-10">
            <p>HTML adalah singkatan dari...</p>
            <article class="w-full">
                <section class="px-10 flex flex-col gap-4">
                    <label for="choice-1" class="flex items-center gap-4 cursor-pointer">
                        <input id="choice-1" type="radio" name="quiz" value="A" class="hidden peer" />
                        <span
                            class="w-11 h-11 text-center text-black text-xl font-light font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex justify-center items-center peer-checked:bg-[#9781ff]">
                            A
                        </span>
                        <p>Hyper Text Markup Language</p>
                    </label>
                    <label for="choice-2" class="flex items-center gap-4 cursor-pointer">
                        <input id="choice-2" type="radio" name="quiz" value="B" class="hidden peer" />
                        <span
                            class="w-11 h-11 text-center text-black text-xl font-light font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex justify-center items-center peer-checked:bg-[#9781ff]">
                            B
                        </span>
                        <p>High Text Markup Language</p>
                    </label>
                    <label for="choice-3" class="flex items-center gap-4 cursor-pointer">
                        <input id="choice-3" type="radio" name="quiz" value="C" class="hidden peer" />
                        <span
                            class="w-11 h-11 text-center text-black text-xl font-light font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex justify-center items-center peer-checked:bg-[#9781ff]">
                            C
                        </span>
                        <p>Hyper Text Making Language</p>
                    </label>
                    <label for="choice-4" class="flex items-center gap-4 cursor-pointer">
                        <input id="choice-4" type="radio" name="quiz" value="D" class="hidden peer" />
                        <span
                            class="w-11 h-11 text-center text-black text-xl font-light font-['Balsamiq Sans'] leading-normal p-2.5 bg-[#d1d1e9] flex justify-center items-center peer-checked:bg-[#9781ff]">
                            D
                        </span>
                        <p>Hyper Type Markup Language</p>
                    </label>
                </section>
                <section class="mt-8 flex justify-between">
                    <a href="" class="flex items-center gap-4 rounded-full py-2 px-4 hover:bg-gray-200">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z" />
                        </svg>
                        Sebelumnya
                    </a>
                    <a href="{{ route('users.result')}}" class="flex items-center gap-4 rounded-full py-2 px-4 hover:bg-gray-200">
                        Kirim Jawaban
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z" />
                        </svg>
                    </a>
                </section>
            </article>
        </section>
    </article>
@endsection
