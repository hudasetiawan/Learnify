<article id="sidebar"
    class="w-64 @yield('sidebarDisplay') transition-all duration-300 mt-20 min-h-screen fixed bg-white drop-shadow-xl flex-col justify-start items-center flex gap-16 py-24">
    @if (auth()->user()->role == 'Admin')
        <button id="buat-kelas"
            class="w-44 p-2.5 bg-yellow-400 hover:bg-yellow-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <span class="text-[#fffffe] text-sm font-bold font-nunito uppercase leading-none">
                Buat Kelas
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
    @else
        <button id="gabung-kelas"
            class="w-44 p-2.5 bg-yellow-400 hover:bg-yellow-500 rounded-[10px] justify-center items-center gap-2.5 inline-flex">
            <span class="text-[#fffffe] text-sm font-bold font-nunito uppercase leading-none">
                Gabung Kelas
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
    @endif

    <article class="h-12 w-44 rounded justify-center items-center gap-3.5 inline-flex hover:bg-gray-200">
        <a @switch(auth()->user()->role)
            @case('Admin')
                href="{{ route('admin.dashboard') }}"
                @break
            @case('User')
                href="{{ route('users.dashboard') }}"
                @break
        @endswitch
            class="text-[#2b2c34] text-xl flex items-center gap-2 font-fredoka"><svg width="32" height="33"
                viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.20001 17.2765V5.87646H13V17.2765H5.20001Z" fill="#2B2C34" />
                <path d="M19 10.0765V5.87646H26.8V10.0765H19Z" fill="#2B2C34" />
                <path d="M19 27.4765V16.0765H26.8V27.4765H19Z" fill="#2B2C34" />
                <path d="M5.20001 27.4765V23.2765H13V27.4765H5.20001Z" fill="#2B2C34" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17 4.67646C17 4.23464 17.3582 3.87646 17.8 3.87646H28C28.4418 3.87646 28.8 4.23464 28.8 4.67647V11.2765C28.8 11.7183 28.4418 12.0765 28 12.0765H17.8C17.3582 12.0765 17 11.7183 17 11.2765V4.67646ZM19 5.87646V10.0765H26.8V5.87646H19ZM17 14.8765C17 14.4346 17.3582 14.0765 17.8 14.0765H28C28.4418 14.0765 28.8 14.4346 28.8 14.8765V28.6765C28.8 29.1183 28.4418 29.4765 28 29.4765H17.8C17.3582 29.4765 17 29.1183 17 28.6765V14.8765ZM19 16.0765V27.4765H26.8V16.0765H19Z"
                    fill="#2B2C34" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.2 3.87646H4.00001C3.55818 3.87646 3.20001 4.23464 3.20001 4.67646V18.4765C3.20001 18.9183 3.55818 19.2765 4.00001 19.2765H14.2C14.6418 19.2765 15 18.9183 15 18.4765V4.67647C15 4.23464 14.6418 3.87646 14.2 3.87646ZM5.20001 5.87646V17.2765H13V5.87646H5.20001Z"
                    fill="#2B2C34" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.2 21.2765H4.00001C3.55818 21.2765 3.20001 21.6346 3.20001 22.0765V28.6765C3.20001 29.1183 3.55818 29.4765 4.00001 29.4765H14.2C14.6418 29.4765 15 29.1183 15 28.6765V22.0765C15 21.6346 14.6418 21.2765 14.2 21.2765ZM5.20001 23.2765V27.4765H13V23.2765H5.20001Z"
                    fill="#2B2C34" />
            </svg>
            Dashboard</a>
    </article>
    <article class="h-fit flex-col justify-start items-start gap-2.5 flex">
        <section
            class="self-stretch p-2.5 rounded-[10px] justify-center items-center gap-2.5 inline-flex {{ request()->routeIs('users.course', 'users.material', 'users.preTest', 'users.result' , 'admin.course', 'admin.material', 'admin.preTest', 'admin.evaluate', 'admin.addQuiz') ? 'bg-purpleActive-0' : 'hover:bg-purpleActive-0' }}">
            <a @switch(auth()->user()->role)
                @case('Admin')
                    href="{{ route('admin.course') }}"
                    @break
                @case('User')
                    href="{{ route('users.course') }}"
                    @break
            @endswitch
                class="text-center text-[#2b2c34] text-xl font-normal font-fredoka">Pemrograman Web</a>
        </section>
        <section
            class="self-stretch p-2.5 rounded-[10px] justify-center items-center gap-2.5 inline-flex hover:bg-purpleActive-0">
            <a href="" class="text-center text-[#2b2c34] text-xl font-normal font-fredoka">Desain Web</a>
        </section>
        <section
            class="self-stretch p-2.5 rounded-[10px] justify-center items-center gap-2.5 inline-flex hover:bg-purpleActive-0">
            <a href="" class="text-center text-[#2b2c34] text-xl font-normal font-fredoka">Jaringan Dasar</a>
        </section>
        <section
            class="self-stretch p-2.5 rounded-[10px] justify-center items-center gap-2.5 inline-flex hover:bg-purpleActive-0">
            <a href="" class="text-center text-[#2b2c34] text-xl font-normal font-fredoka">Matematika</a>
        </section>
        <section
            class="self-stretch p-2.5 rounded-[10px] justify-center items-center gap-2.5 inline-flex hover:bg-purpleActive-0">
            <a href="" class="text-center text-[#2b2c34] text-xl font-normal font-fredoka">Bahasa Indonesia</a>
        </section>
        <section
            class="self-stretch p-2.5 rounded-[10px] justify-center items-center gap-2.5 inline-flex hover:bg-purpleActive-0">
            <a href="" class="text-center text-[#2b2c34] text-xl font-normal font-fredoka">Bahasa Jawa</a>
        </section>
    </article>
</article>

<!-- Gabung Kelas Modal -->
<div id="join-pop-up"
    class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h2 class="text-2xl font-bold mb-4">Gabung Kelas</h2>
        <form>
            <div class="mb-4">
                <label for="class-code" class="block text-sm font-medium">Kode Kelas</label>
                <input type="text" id="class-code" class="w-full px-4 py-2 border rounded-lg focus:outline-none"
                    placeholder="Masukkan kode kelas">
            </div>
            <div class="flex justify-start gap-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Gabung</button>
                <button type="button" id="close-gabung-kelas" class="px-4 py-2 bg-gray-300 rounded-lg"
                    onclick="closeModal('join-pop-up')">Batal</button>
            </div>
        </form>
    </div>
</div>

<!-- Buat Kelas Modal -->
<div id="create-pop-up"
    class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h2 class="text-2xl font-bold mb-4">Buat Kelas</h2>
        <form>
            <div class="mb-4">
                <label for="class-name" class="block text-sm font-medium">Nama Kelas</label>
                <input type="text" id="class-name" class="w-full px-4 py-2 border rounded-lg focus:outline-none"
                    placeholder="Masukkan nama kelas">
            </div>
            <div class="mb-4">
                <label for="class-description" class="block text-sm font-medium">Deskripsi</label>
                <textarea id="class-description" class="w-full px-4 py-2 border rounded-lg focus:outline-none"
                    placeholder="Tambahkan deskripsi kelas"></textarea>
            </div>
            <div class="flex justify-start gap-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Buat</button>
                <button type="button" id="close-buat-kelas" class="px-4 py-2 bg-gray-300 rounded-lg"
                    onclick="closeModal('create-pop-up')">Batal</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buatKelasButton = document.getElementById('buat-kelas');
        if (buatKelasButton) {
            buatKelasButton.addEventListener('click', function() {
                openModal('create-pop-up');
            });
        }

        const closeGabungKelas = document.getElementById('close-gabung-kelas');
        if (closeGabungKelas) {
            closeGabungKelas.addEventListener('click', function() {
                closeModal('join-pop-up');
            });
        }

        const gabungKelasButton = document.getElementById('gabung-kelas');
        if (gabungKelasButton) {
            gabungKelasButton.addEventListener('click', function() {
                openModal('join-pop-up');
            });
        }

        const closeBuatKelas = document.getElementById('close-buat-kelas');
        if (closeBuatKelas) {
            closeBuatKelas.addEventListener('click', function() {
                closeModal('create-pop-up');
            });
        }

        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }
    });
</script>
