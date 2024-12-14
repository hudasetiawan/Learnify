@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header', 'Kelas')

@section('content')
    <article class="w-full flex flex-col gap-16 justify-center items-center">
        <!-- Header Section -->
        <article class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
            <section class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
                <h1 class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Dasar-dasar HTML</h1>
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

@section('footer')
    @include('partial.footer')
@endsection