@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header', 'Kelas')

@section('content')
    <article class="w-full flex flex-col gap-5">
        <!-- Header Section -->
        <article class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
            <section class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
                <section class="relative w-full flex justify-between">
                    <h1 class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Pemrograman Web</h1>
                    <svg id="setting-menu-toggle" class="dropdown-trigger cursor-pointer" width="26" height="26"
                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.5405 8.25877L21.8662 7.08867C21.2958 6.09859 20.0316 5.75704 19.0401 6.32513V6.32513C18.5682 6.60315 18.0051 6.68202 17.4749 6.54437C16.9448 6.40671 16.4911 6.06383 16.2141 5.59134C16.0358 5.29102 15.94 4.94895 15.9364 4.59973V4.59973C15.9525 4.03985 15.7413 3.49729 15.3508 3.09567C14.9604 2.69404 14.4241 2.46754 13.8639 2.46777H12.5054C11.9567 2.46777 11.4306 2.68643 11.0435 3.07538C10.6564 3.46433 10.4403 3.9915 10.4429 4.54024V4.54024C10.4266 5.67319 9.5035 6.58307 8.37043 6.58295C8.02121 6.57933 7.67914 6.48355 7.37882 6.3053V6.3053C6.38738 5.73721 5.12319 6.07876 4.55273 7.06884L3.82885 8.25877C3.25909 9.24762 3.596 10.511 4.58248 11.0849V11.0849C5.22371 11.4551 5.61872 12.1392 5.61872 12.8797C5.61872 13.6201 5.22371 14.3043 4.58248 14.6745V14.6745C3.59725 15.2445 3.25998 16.5048 3.82885 17.4907V17.4907L4.51307 18.6707C4.78035 19.153 5.2288 19.5088 5.75919 19.6596C6.28958 19.8103 6.85817 19.7435 7.33915 19.4739V19.4739C7.81198 19.198 8.37543 19.1224 8.90426 19.2639C9.43309 19.4054 9.88348 19.7523 10.1553 20.2275C10.3336 20.5278 10.4293 20.8699 10.433 21.2191V21.2191C10.433 22.3637 11.3608 23.2916 12.5054 23.2916H13.8639C15.0047 23.2916 15.9309 22.3697 15.9364 21.229V21.229C15.9338 20.6786 16.1512 20.1499 16.5405 19.7606C16.9297 19.3714 17.4584 19.1539 18.0089 19.1566C18.3573 19.1659 18.6979 19.2613 19.0005 19.4342V19.4342C19.9893 20.004 21.2527 19.6671 21.8266 18.6806V18.6806L22.5405 17.4907C22.8169 17.0163 22.8927 16.4514 22.7513 15.9209C22.6098 15.3905 22.2627 14.9383 21.7869 14.6646V14.6646C21.3111 14.3908 20.964 13.9387 20.8225 13.4082C20.6811 12.8778 20.7569 12.3128 21.0333 11.8385C21.213 11.5247 21.4731 11.2646 21.7869 11.0849V11.0849C22.7675 10.5113 23.1036 9.25531 22.5405 8.26869V8.26869V8.25877Z"
                            stroke="#FFFFFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <ellipse cx="13.1896" cy="12.8798" rx="2.85584" ry="2.85583" stroke="#FFFFFE"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div id="setting-menu-popup"
                        class="hidden absolute top-20 right-0 w-40 z-40 h-full flex justify-center items-center">
                        <div class="bg-white border border-black rounded-lg w-full">
                            <section class="w-full h-full py-2">
                                <a href=""
                                    class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                                    </span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.2599 3.59997L5.04985 12.29C4.73985 12.62 4.43985 13.27 4.37985 13.72L4.00985 16.96C3.87985 18.13 4.71985 18.93 5.87985 18.73L9.09985 18.18C9.54985 18.1 10.1799 17.77 10.4899 17.43L18.6999 8.73997C20.1199 7.23997 20.7599 5.52997 18.5499 3.43997C16.3499 1.36997 14.6799 2.09997 13.2599 3.59997Z"
                                            stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.8901 5.04999C12.3201 7.80999 14.5601 9.91999 17.3401 10.2"
                                            stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3 22H21" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">Edit
                                    </h1>
                                </a>
                            </section>
                            <section class="h-px relative">
                                <span class="w-full h-px left-0 top-0 absolute bg-black/30"></span>
                            </section>
                            <section class="w-full h-full py-2">
                                <a href="{{ route('admin.material') }}"
                                    class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                                    <span class="w-6 h-6 relative">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.8499 9.14001L18.1999 19.21C18.0899 20.78 17.9999 22 15.2099 22H8.7899C5.9999 22 5.9099 20.78 5.7999 19.21L5.1499 9.14001"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.3301 16.5H13.6601" stroke="black" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.5 12.5H14.5" stroke="black" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">
                                        Hapus</h1>
                                </a>
                            </section>
                        </div>
                    </div>
                </section>
                <section class="self-stretch justify-start items-start gap-2.5 inline-flex">
                    <p class="grow shrink basis-0 text-[#fffffe] text-base font-normal font-fredoka leading-normal">
                        Ready to start your day with us?
                    </p>
                </section>
            </section>
        </article>

        <!-- Action Section (Tombol Tambah) -->
        <section class="relative flex flex-col items-end">
            <button id="add-material"
                class="w-40 p-2.5 bg-yellow-400 hover:bg-yellow-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
                <span class="text-[#fffffe] text-sm font-bold font-nunito uppercase leading-none">
                    @if (auth()->user()->role == 'Admin')
                        Tambah
                    @endif
                </span>
                <article class="w-8 h-8 relative">
                    <span class="w-8 h-8 left-0 top-0 absolute bg-[#7743db] rounded-full"><svg width="33" height="33"
                            viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16.5" cy="16.6765" r="16" fill="#7743DB" />
                            <path
                                d="M23.5 17.6765H17.5V23.6765H15.5V17.6765H9.5V15.6765H15.5V9.67651H17.5V15.6765H23.5V17.6765Z"
                                fill="white" />
                        </svg>
                    </span>
                </article>
            </button>
            <div id="add-material-popup"
                class="hidden absolute top-24 right-0 w-40 h-full flex justify-center items-center">
                <div class="bg-white border border-black rounded-lg w-full">
                    <section class="w-full h-full py-2">
                        <a href="{{ route('admin.addQuiz') }}"
                            class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                            </span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="black"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16.0399 3.02001L8.15988 10.9C7.85988 11.2 7.55988 11.79 7.49988 12.22L7.06988 15.23C6.90988 16.32 7.67988 17.08 8.76988 16.93L11.7799 16.5C12.1999 16.44 12.7899 16.14 13.0999 15.84L20.9799 7.96001C22.3399 6.60001 22.9799 5.02001 20.9799 3.02001C18.9799 1.02001 17.3999 1.66001 16.0399 3.02001Z"
                                    stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.9102 4.15002C15.5802 6.54002 17.4502 8.41002 19.8502 9.09002" stroke="black"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">Kuis
                            </h1>
                        </a>
                    </section>
                    <section class="h-px relative">
                        <span class="w-full h-px left-0 top-0 absolute bg-black/30"></span>
                    </section>
                    <section class="w-full h-full py-2">
                        <a href="{{ route('admin.add-material') }}"
                            class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                            <span class="w-6 h-6 relative">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 16.7399V4.66994C22 3.46994 21.02 2.57994 19.83 2.67994H19.77C17.67 2.85994 14.48 3.92994 12.7 5.04994L12.53 5.15994C12.24 5.33994 11.76 5.33994 11.47 5.15994L11.22 5.00994C9.44 3.89994 6.26 2.83994 4.16 2.66994C2.97 2.56994 2 3.46994 2 4.65994V16.7399C2 17.6999 2.78 18.5999 3.74 18.7199L4.03 18.7599C6.2 19.0499 9.55 20.1499 11.47 21.1999L11.51 21.2199C11.78 21.3699 12.21 21.3699 12.47 21.2199C14.39 20.1599 17.75 19.0499 19.93 18.7599L20.26 18.7199C21.22 18.5999 22 17.6999 22 16.7399Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 5.48999V20.49" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.75 8.48999H5.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8.5 11.49H5.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">
                                Materi</h1>
                        </a>
                    </section>
                </div>
            </div>
        </section>

        <!-- Card Course Section -->
        <section class="w-full h-fit flex flex-row gap-10 flex-wrap">
            <a href="{{ route('admin.preTest') }}"
                class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
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

            <a href="{{ route('admin.material') }}"
                class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
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

            <a href="#"
                class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
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

            <a href="#"
                class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
                <section class="h-20 px-4 py-2 bg-white flex justify-start items-center">
                    <img class="w-14 h-14" src="{{ asset('img/book-course.png') }}" alt="Online Course">
                </section>
                <section class="flex flex-col justify-start items-start px-4 py-2 gap-2">
                    <h2 class="text-gray-800 text-xl font-medium font-fredoka leading-tight">
                        Dasar-dasar JavaScript
                    </h2>
                    <p class="text-gray-800 text-sm font-normal font-fredoka leading-normal">
                        Materi pengenalan JavaScript.
                    </p>
                </section>
            </a>

            <a href="#"
                class="w-1/5 h-64 bg-secondary-0 rounded-lg border-2 border-gray-800 flex flex-col justify-start items-stretch gap-2 overflow-hidden hover:outline hover:outline-1">
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
        </section>
    </article>
@endsection

@section('script')
    <script>
        document.getElementById('add-material').addEventListener('click', function() {
            document.getElementById('add-material-popup').classList.toggle('hidden');
        });

        document.getElementById('setting-menu-toggle').addEventListener('click', function() {
            document.getElementById('setting-menu-popup').classList.toggle('hidden');
        });
    </script>
@endsection
