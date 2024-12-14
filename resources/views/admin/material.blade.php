@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header', 'Kelas')

@section('content')
    <article class="w-full flex flex-col gap-16 justify-center items-center">
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

        <div class="w-[900px] h-full flex-col gap-5 inline-flex">
            <img src="{{ asset('img/Belajar-html.jpeg') }}" />
            <h1 class="font-poppins text-3xl font-bold">Apa itu HTML? Ini Pengertian, Cara Kerja, dan Strukturnya!</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML adalah
                bahasa standar yang digunakan untuk membuat struktur halaman web. Meski sering disebut sebagai bahasa
                pemrograman, sebenarnya HTML bukanlah bahasa pemrograman dalam arti sebenarnya. Sebab, HTML merupakan bahasa
                markup yang berfungsi untuk mengelola dan menyajikan konten berupa teks, gambar, video, dan elemen-elemen
                lainnya dalam sebuah halaman web.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML memegang
                peranan penting dalam pembangunan website yang efisien dan cepat. Seperti yang dikutip dari situs
                FirstSiteGuide.com, terdapat lebih dari 95% situs web di dunia menggunakan HTML dan kategori-kategorinya
                untuk menciptakan lingkungan yang efisien dan cepat.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Karena itulah bagi kamu
                yang berniat
                membangun website, penting untuk mempelajari apa itu HTML hingga strukturnya di artikel Dewaweb kali ini.
                Simak terus sampai akhir ya!</p>
            <h1 class="font-poppins text-2xl font-bold">Apa itu HTML?</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML (HyperText Markup
                Language)
                adalah bahasa markup standar yang digunakan untuk membuat dan menyusun struktur halaman web. Tidak seperti
                bahasa pemrograman, HTML berfokus pada pemberian markup atau penanda pada konten yang akan ditampilkan di
                halaman web. Markup ini dilakukan dengan menggunakan serangkaian elemen atau “tag” yang memberikan informasi
                tentang struktur dan formatnya.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML memberikan struktur
                dasar bagi
                halaman web dengan menggunakan elemen-elemen seperti heading, paragraf, tautan, gambar, daftar, dan lain
                sebagainya. Setiap elemen HTML diberi tanda dengan tag pembuka dan tag penutup yang menunjukkan bagaimana
                konten harus ditampilkan pada browser.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Sebagai bahasa markup
                utama untuk
                web, HTML memiliki pengguna yang sangat banyak. Hingga saat ini diperkirakan dari 2 miliar website, sekitar
                1,9 miliarnya menggunakan HTML. Dari jumlah tersebut, sekitar 190 juta website merupakan pengguna HTML yang
                aktif.</p>
            <h1 class="font-poppins text-2xl font-bold">Sejarah HTML</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML pertama kali
                diciptakan oleh Tim
                Berners-Lee, seorang fisikawan di CERN (organisasi riset nuklir asal Swiss) pada tahun 1989. Tujuan awal
                pembuatan HTML adalah untuk membantu para peneliti berbagi dokumen dari satu komputer ke komputer lain.
                Sistem ini kemudian dikembangkan lebih lanjut menjadi "World Wide Web" atau "www".</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Sejak awal
                kemunculannya, HTML telah mengalami beberapa kali revisi dan perkembangan hingga mencapai versi terkini saat
                ini. Berikut adalah garis besar perkembangan versi-versi HTML.</p>
            <ul class="w-full px-8">
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">1993
                    – HTML versi 1.0 dirilis
                    secara tidak resmi pada Juni 1993.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">1995
                    – HTML 2.0 dirilis resmi
                    pada 24 November 1995 sebagai versi resmi pertama.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">1997
                    – HTML 3.2 dirilis resmi
                    pertama kali oleh W3C (World Wide Web Consortium) pada 14 Januari 1997, setelah versi 3.0 gagal
                    beredar karena banyaknya perdebatan terkait perubahan yang diajukan.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">1998
                    – HTML 4.0 dirilis pada 2
                    April 1998.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">1999
                    – HTML 4.01 dirilis di
                    akhir tahun untuk memperbaiki kekurangan dari versi 4.0.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">2000
                    – XHTML 1.0 dirilis pada
                    26 Januari 2000, mengadopsi XML (Extended Markup Language) untuk menyederhanakan proses penyimpanan
                    dan pengiriman data.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">2002
                    – XHTML 2.0 dirilis pada
                    Agustus 2002.</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">2014
                    – HTML5 dirilis dan
                    digunakan secara global, dikembangkan oleh W3C dan WHATWG untuk bekerja tanpa XHTML.</li>
            </ul>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Hingga saat ini, HTML5
                dianggap sebagai versi paling canggih karena stabilitas dan kesederhanaan sistemnya. Versi ini juga dapat
                dikolaborasikan dengan CSS dan JavaScript untuk membuat website secara manual menggunakan kode.</p>
            <h1 class="font-poppins text-2xl font-bold">Cara Kerja HTML</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML bekerja dengan
                menggunakan serangkaian elemen atau tag yang memberikan struktur dan semantik pada konten sebuah halaman
                web. File HTML memiliki ekstensi .html atau .htm yang dapat dibuka dan ditampilkan oleh browser web seperti
                Google Chrome, Mozilla Firefox, Safari, dan lainnya.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Cara kerja HTML dapat
                dijelaskan sebagai berikut:</p>
            <ul class="w-full px-8">
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Pembuatan file HTML: </span>
                    Buat sebuah file dengan ekstensi .html atau .htm menggunakan teks editor. Di dalam
                    file ini, kamu akan menulis kode HTML yang terdiri dari elemen-elemen terstruktur.
                </li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Penulisan elemen HTML:</span>
                    Elemen HTML ditulis menggunakan tag pembuka dan tag penutup yang menandai
                    bagian-bagian konten tertentu. Misalnya, <h1>Judul</h1> untuk menandai sebuah judul utama. Setiap elemen
                    memiliki fungsi dan semantik yang berbeda dalam menstrukturkan konten.
                </li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Hierarki elemen:</span>
                    Elemen-elemen HTML disusun secara hierarkis, membentuk bagian-bagian seperti judul,
                    paragraf, daftar, tautan, gambar, dan blok konten lainnya. Susunan hierarki ini membantu browser
                    memahami struktur dan urutan tampilan konten.
                </li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Rendering halaman web:</span>
                    Setelah menyimpan file HTML, browser web akan membaca dan memproses kode di
                    dalamnya. Browser akan merender atau menampilkan konten halaman web sesuai dengan elemen-elemen HTML
                    yang telah ditulis.
                </li>
            </ul>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Umumnya, sebuah situs
                web terdiri dari beberapa halaman HTML yang saling terhubung melalui tautan (link). Setiap halaman memiliki
                file HTML tersendiri, seperti halaman beranda, halaman tentang kami, halaman kontak, dan lainnya. Meski
                begitu, semua halaman ini menggunakan prinsip dasar yang sama dalam penggunaan elemen-elemen HTML.</p>
            <h1 class="font-poppins text-2xl font-bold">Fungsi HTML</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Meskipun bukan bahasa
                pemrograman, HTML memiliki beberapa fungsi penting, di antaranya sebagai berikut.</p>
            <ul class="w-full px-8">
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Digunakan untuk membuat struktur website</span>
                    – HTML memberikan kerangka dasar bagi sebuah situs web dengan menggunakan elemen-elemen seperti heading,
                    paragraf, daftar, tautan, gambar, dan lain-lain. Elemen-elemen ini disusun secara hierarkis untuk
                    membentuk tampilan dan alur konten pada halaman web.
                </li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Membungkus elemen HTML</span>
                    – Setiap elemen HTML, seperti judul, paragraf, atau gambar, dibungkus dengan tag pembuka dan tag
                    penutup. Tag-tag ini memberikan informasi kepada browser tentang bagaimana elemen tersebut harus
                    ditampilkan dan diformat.
                </li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Membuat link yang dapat mengarahkan ke halaman lain </span>
                    – HTML memungkinkan kamu untuk membuat tautan (link) yang menghubungkan antara satu halaman dengan
                    halaman lain, baik di dalam situs web yang sama maupun ke situs web eksternal. Tautan ini memudahkan
                    navigasi bagi pengguna dalam menjelajahi konten di seluruh situs.
                </li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">
                    <span class="font-bold">Mengingat HTML menggunakan karakter ASCII</span>
                    – HTML dirancang untuk menggunakan karakter-karakter ASCII <span class="italic">(American Standard Code
                        for Information
                        Interchange)</span> dalam penulisan kodenya. Hal ini memastikan kompatibilitas dan portabilitas kode
                    HTML di
                    berbagai platform dan perangkat.
                </li>
            </ul>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Selain fungsi-fungsi di
                atas, HTML juga memungkinkan kamu untuk menyisipkan multimedia seperti gambar, video, dan audio ke dalam
                halaman web. Meskipun terbatas dalam hal tampilan dan interaksi, HTML sering dikombinasikan dengan teknologi
                lain seperti CSS <span class="italic">(Cascading Style Sheets)</span> untuk mempercantik tampilan, dan
                JavaScript untuk menambahkan
                fungsionalitas dan interaksi yang lebih kompleks.</p>
            <h1 class="font-poppins text-2xl font-bold">Struktur HTML</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML dibangun dari
                beberapa komponen utama yang membentuk struktur sebuah halaman web. Berikut adalah penjelasannya.</p>
            <h2 class="font-poppins text-xl font-normal">1. Tag</h2>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Tag adalah penanda awal
                dan akhir dari sebuah elemen HTML. Tag terdiri dari tanda kurung siku (<>) yang mengapit sebuah kode
                    tertentu. Tag berfungsi sebagai perintah atau instruksi yang dibaca oleh browser. Ada dua jenis tag
                    dalam HTML:</p>
            <ul class="w-full px-8">
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">Tag
                    dengan penutup, seperti
                    &lt;p&gt;…&lt;/p&gt; untuk paragraf, &lt;body&gt;…&lt;/body&gt; untuk tubuh halaman, dan
                    &lt;title&gt;…&lt;/title&gt; untuk judul halaman</li>
                <li class="font-poppins py-2 text-gray-800 text-base font-normal leading-normal list-disc text-justify">Tag
                    tanpa penutup, seperti &lt;br&gt; untuk baris baru, &lt;img&gt; untuk menyisipkan gambar, dan &lt;hr&gt;
                    untuk membuat garis horisontal.</li>
            </ul>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Contoh tag:</p>
            <table class="w-full h-full border border-neutral-300">
                <tr>
                    <td class="p-4">&lt;h1&gt;Judul Utama&lt;/h1&gt;, &lt;a
                        href=”https://example.com”&gt;Tautan&lt;/a&gt;</span></td>
                </tr>
            </table>
            <h2 class="font-poppins text-xl font-normal">2. Elemen</h2>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Elemen adalah bagian
                yang lebih luas dari tag. Elemen terdiri dari tag
                pembuka, konten di dalamnya (jika ada), dan tag penutup, serta atribut yang melengkapinya (jika ada).
                Tidak semua elemen memiliki tag penutup, seperti elemen &lt;br&gt; dan &lt;img&gt;.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Contoh Elemen:</p>
            <table class="w-full h-full border border-neutral-300">
                <tr>
                    <td class="p-4">
                        <p class="font-poppins text-gray-800 text-base font-normal leading-normal">&lt;p&gt;Ini
                            adalah sebuah paragraf.&lt;/p&gt;</p>
                        <p class="font-poppins text-gray-800 text-base font-normal leading-normal">&lt;a
                            href=”https://example.com”&gt;Tautan ke Website&lt;/a&gt;</p>
                    </td>
                </tr>
            </table>
            <h2 class="font-poppins text-xl font-normal">3. Atribut</h2>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Atribut adalah informasi
                tambahan yang diberikan pada sebuah tag atau elemen.
                Tidak semua tag memiliki atribut, tetapi beberapa tag tertentu memerlukan atribut agar dapat berfungsi
                dengan benar, seperti &lt;a&gt;, &lt;img&gt;, dan &lt;video&gt;. Atribut ditulis di dalam tag pembuka
                dan memberikan informasi tambahan tentang bagaimana elemen tersebut harus ditampilkan atau
                berfungsi.</p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Contoh Atribut:</p>
            <table class="w-full h-full border border-neutral-300">
                <tr>
                    <td class="p-4">
                        <p class="font-poppins text-gray-800 text-base font-normal leading-normal">&lt;a
                            href=”https://example.com”&gt;Tautan ke Website&lt;/a&gt;
                            (atribut href memberikan alamat tautan)</p>
                        <p class="font-poppins text-gray-800 text-base font-normal leading-normal">&lt;img src=”gambar.jpg”
                            alt=”Deskripsi gambar”&gt; (atribut src
                            memberikan sumber gambar, dan alt memberikan deskripsi teks alternatif)</p>
                    </td>
                </tr>
            </table>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Dengan memahami struktur
                tag, elemen, dan atribut dalam HTML, kamu dapat membangun halaman web yang terstruktur dengan baik dan
                sesuai dengan standar yang berlaku. Kombinasi dari ketiga komponen ini memungkinkan kamu untuk mengatur
                tampilan dan perilaku konten pada halaman web.</p>
            <h1 class="font-poppins text-2xl font-bold">Penutup</h1>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">HTML atau <span class="italic">HyperText
                Markup Language</span> adalah bahasa markup standar dalam pembangunan website. Dengan menggunakan serangkaian
                elemen dan tag, HTML memberikan struktur dan semantik pada konten sebuah halaman web, sehingga konten
                tersebut dapat ditampilkan dengan benar di browser. </p>
            <p class="font-poppins text-gray-800 text-base font-normal leading-normal text-justify">Meskipun memiliki
                keterbatasan dalam tampilan dan interaksi, HTML sering dikombinasikan dengan CSS untuk membuat tampilan yang
                menarik dan JavaScript untuk menambahkan fungsionalitas lanjutan.</p>
        </div>
    </article>
@endsection
@section('script')
    <script>
        document.getElementById('setting-menu-toggle').addEventListener('click', function() {
            document.getElementById('setting-menu-popup').classList.toggle('hidden');
        });
    </script>
@endsection

@section('footer')
    @include('partial.footer')
@endsection

@section('script')
    <script>
        document.getElementById('setting-menu-toggle').addEventListener('click', function() {
            document.getElementById('setting-menu-popup').classList.toggle('hidden');
        });
    </script>
@endsection