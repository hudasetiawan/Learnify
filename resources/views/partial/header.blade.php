<nav class="w-screen fixed z-10 h-24 px-12 py-4 bg-white shadow-md justify-start items-center gap-5 inline-flex">
    <section id="sidebar-toggle" class="w-fit h-fit px-2 py-2 justify-center items-center flex cursor-pointer @yield('sidebarToggleDisplay')">
        <svg width="35" height="30" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.5 8.92651H25.5" stroke="#2329D6" stroke-width="2" stroke-linecap="round" />
            <path d="M8.5 15.1765H25.5" stroke="#2329D6" stroke-width="2" stroke-linecap="round" />
            <path d="M8.5 21.4265H25.5" stroke="#2329D6" stroke-width="2" stroke-linecap="round" />
        </svg>
    </section>
    <a href="@if (auth()->user()->role == 'Admin') {{ route('admin.dashboard') }} @else {{ route('users.dashboard') }} @endif" class="px-2.5 justify-center items-center flex">
        <h1 class="text-primary-0 text-3xl font-bold font-fredoka">Learnify</h1>
    </a>
    <section class="grow shrink basis-0 px-6 flex-col justify-start items-start gap-3 inline-flex">
        <h1 class="self-stretch text-stone-800 text-2xl font-medium font-fredoka">@yield('title-header')</h1>
        <p class="self-stretch text-black text-base font-normal font-fredoka">
            <span id="current-day" class="text-primary-0 font-medium"></span>, <span id="current-date"></span>
        </p>
    </section>
    <section class="relative">
        <article class="justify-start items-center gap-3 flex">
            <section class="w-12 h-12 relative">
                <div class="w-12 h-12 left-0 top-0 absolute bg-secondary-0 rounded-full"></div>
                <div
                    class="left-[16px] top-[16px] absolute text-center text-white text-[10px] font-normal font-['Balsamiq Sans'] uppercase leading-none tracking-wider">
                    MK
                </div>
            </section>
            <span class="text-center text-stone-800 text-base font-medium font-fredoka uppercase">
                {{ auth()->user()->name }}</span>
            <span class="w-6 h-6 relative dropdown-trigger cursor-pointer">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="chevron-down">
                        <path id="Path 3" d="M6 10.1765L12 16.1765L18 10.1765" stroke="#2B2C34" stroke-width="2"
                            stroke-linecap="round" />
                    </g>
                </svg>
            </span>
        </article>
        <!-- Dropdown Menu -->
        <article id="dropdown-menu"
            class="absolute right-0 w-36 h-fit bg-white rounded border-2 border-gray-800 hidden flex-col justify-start items-center">
            <section class="w-full h-full py-2">
                <button type="submit" class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-gray-300">
                    <span class="w-6 h-6 relative"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="user">
                                <path id="Path 4"
                                    d="M5.5 19.5C5.5 19.5 9 18 10 17C11 16 8 16 8 11C8 6 12 6 12 6C12 6 16 6 16 11C16 16 13 16 14 17C15 18 18.5 19.5 18.5 19.5"
                                    stroke="black" stroke-linecap="round" />
                                <path id="Oval" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="black" />
                            </g>
                        </svg>
                    </span>
                    <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal">Profile</h1>
                </button>
            </section>
            <section class="h-px relative">
                <span class="w-full h-px left-0 top-0 absolute bg-black/30"></span>
            </section>
            <section class="w-full h-full py-2">
                <form action="{{ route('logout')}}">
                    @csrf
                    <button type="submit" class="w-full px-3.5 py-3 justify-start items-start gap-3 inline-flex hover:bg-red-500 group">
                        <span class="w-6 h-6 relative"><svg class="group-hover:stroke-white stroke-black" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="exit">
                                <path id="Rectangle 2" fill-rule="evenodd" clip-rule="evenodd" d="M15 4V20H4L4 4L15 4Z"
                                    stroke="" stroke-linecap="round" stroke-linejoin="round" />
                                <g id="Icon/arrow-right">
                                    <g id="Icon/arrow-down">
                                        <path id="Path 2" d="M12.5 12H21.5" stroke="" stroke-linecap="round" />
                                        <path id="Path 3" d="M18.5 15L21.5 12L18.5 9" stroke=""
                                        stroke-linecap="round" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <h1 class="w-full text-gray-800 text-base font-normal font-poppins leading-normal group-hover:text-white">Logout</h1>
                </button>
            </form>
            </section>
        </article>
    </section>
</nav>

<script>
    // Toggle dropdown visibility
    const trigger = document.querySelector('.dropdown-trigger');
    const dropdown = document.getElementById('dropdown-menu');

    trigger.addEventListener('click', () => {
        dropdown.classList.toggle('hidden');
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!trigger.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });

    // Update date
    function getDayName(dayIndex) {
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        return days[dayIndex];
    }

    function getMonthName(monthIndex) {
        const months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        return months[monthIndex];
    }

    function updateDate() {
        const now = new Date();
        const dayName = getDayName(now.getDay());
        const day = now.getDate();
        const monthName = getMonthName(now.getMonth());
        const year = now.getFullYear();

        document.getElementById('current-day').textContent = dayName;
        document.getElementById('current-date').textContent = `${day} ${monthName} ${year}`;
    }

    updateDate();
</script>