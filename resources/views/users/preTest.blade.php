@extends('layout.user-skeleton')

@section('title', 'Kelas')

@section('title-header', 'Kelas')

@section('content')
    <article class="w-full flex flex-col gap-28 justify-center items-center">
        <!-- Header Section -->
        <article class="w-full h-20 py-16 bg-primary-0 rounded-lg justify-between items-center inline-flex">
            <section class="w-full px-7 flex-col justify-start items-start gap-[15px] inline-flex">
                <h1 class="self-stretch text-[#fffffe] text-4xl font-medium font-fredoka">Pre Test</h1>
                <section class="self-stretch justify-start items-start gap-2.5 inline-flex">
                    <p class="grow shrink basis-0 text-[#fffffe] text-base font-normal font-fredoka leading-normal">
                        Ready to start your day with us?
                    </p>
                </section>
            </section>
        </article>

        <!-- Card Course Section -->
        <article class="w-1/2 h-full flex-col justify-start items-start gap-8 inline-flex">
            <h1 class="self-stretch text-gray-800 text-2xl font-bold font-nunito leading-normal">Aturan Pre Test</h1>
            <div class="self-stretch justify-start items-start gap-2.5 inline-flex">
                <ol class="list-decimal pl-6 space-y-2 text-gray-900 text-lg font-normal font-nunito leading-8">
                    <li>Pre-test ini bertujuan untuk mengukur pemahaman awal Anda sebelum mengikuti pembelajaran.</li>
                    <li>Silakan kerjakan soal-soal berikut sesuai dengan pengetahuan yang Anda miliki saat ini.</li>
                    <li>Bacalah setiap pertanyaan dengan teliti sebelum memberikan jawaban.</li>
                </ol>
            </div>
            <div class="self-stretch h-9 flex-col justify-center items-end gap-2.5 flex">
                <button id="start-test"
                    class="h-9 bg-purpleActive-0 rounded-lg flex-col justify-center items-center flex hover:bg-[#9989A1] transition">
                    <div class="px-4 py-2.5 justify-start items-center gap-2 inline-flex">
                        <div class="text-gray-800 text-sm font-medium font-fredoka uppercase">Mulai</div>
                    </div>
                </button>
            </div>
        </article>
    </article>

    <div id="confirm-start-pop-up"
        class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg w-96">
            <h2 class="text-2xl font-bold mb-4">Pre Test</h2>
            <form>
                <div class="mb-4">
                    <h1>Apakah anda yakin ingin memulai Pre Test?</h1>
                </div>
                <div class="flex justify-end gap-4">
                    <button type="button" id="close-gabung-kelas" class="px-4 py-2 bg-gray-300 rounded-lg"
                        onclick="closeModal('confirm-start-pop-up')">Batal</button>
                    <a href="{{ route('users.test') }}" type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Mulai</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById('start-test').addEventListener('click', function () {
            openModal('confirm-start-pop-up');
        });
        
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
@endsection
